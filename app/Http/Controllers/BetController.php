<?php

namespace F1donky\Http\Controllers;

use Illuminate\Http\Request;
use F1donky\Http\Requests;
use F1donky\Bet;
use F1donky\Race;
use F1donky\Driver;
use F1donky\User;

use View;
use Auth;
use Mail;

use Carbon\Carbon;

class BetController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth')->except('standings');
    }

	public function create()
	{
		$actualRace = Race::where('start', '>', Carbon::now())->get()->first();
		if(Auth::user()->hasBetInRace($actualRace)){
			if(Race::find($actualRace->id+1)!=null){
				$actualRace = Race::find($actualRace->id+1);
			} else {
				return redirect('/bets')->withSuccess('Ya has votado en todos los GPs de la temporada. Te esperamos en la próxima.');
			}
		}
		$drivers = Driver::lists('name', 'id');
		return View::make('bets.create')->with('race', $actualRace)->with('drivers', $drivers);
	}

	public function index()
	{
		$user_id = Auth::user()->id;
		$bets = Bet::where('user_id', $user_id)->orderBy('race_id', 'DESC')->get();
		return View::make('bets.show')->with('bets', $bets);
	}

	private function sendBetInfoByMail($input)
	{
		$bet_info = array(
			'p1' => Driver::find($input["p1"])->getFullName(), 
			'p2' => Driver::find($input["p2"])->getFullName(), 
			'p3' => Driver::find($input["p3"])->getFullName(), 
			'p4' => Driver::find($input["p4"])->getFullName(),  
			'p5' => Driver::find($input["p5"])->getFullName(),  
			'pole' => Driver::find($input["pole"])->getFullName(),  
			'fastest' => Driver::find($input["fastest"])->getFullName(),
			'race' => Race::find($input["race_id"])->mainName() 
		);
        Mail::send('emails.bet', ['bet_info' => $bet_info], function ($message) {
		    $message->from('f1@donky.es', 'El Briatore del Donky');
		    $message->to(Auth::user()->email, Auth::user()->name)->subject('Tu voto en F1 Donky');
		});
	}

	public function store(Request $request)
	{
	    $this->validate($request, [
		    'p1' => 'required',
		    'p2' => 'required',
		    'p3' => 'required',
		    'p4' => 'required',
		    'p5' => 'required',
		    'pole' => 'required',
		    'fastest' => 'required',
		]);

	    $input = $request->all();

	    Bet::create($input);

	    $this->sendBetInfoByMail($input);
	    	
	    return redirect('/bets')->withSuccess('Apuesta realizada. Recibirás un mail con la confirmación.');
	}

	private static function comparateScore($userA, $userB) {
		if($userA->getTotalScore() == $userB->getTotalScore()){ 
			return 0 ; 
		}
		return ($userA->getTotalScore() > $userB->getTotalScore()) ? -1 : 1;
	}

	public function standings()
	{
		$users = User::get()->all();
		usort($users, array($this,'comparateScore'));
		return View::make('bets.index')->with('users',$users);
	}

}
