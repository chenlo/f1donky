<?php

namespace F1donky\Http\Controllers;

use Illuminate\Http\Request;
use F1donky\Http\Requests;
use F1donky\Race;
use F1donky\Driver;
use F1donky\Bet;

use View;

class RaceController extends Controller
{

	public function __construct()
    {
        $this->middleware('admin', ['only' => array('edit')]);
    }

	public function index()
   	{
   		$races = Race::all();
		return View::make('races.index')->with('races', $races);
	}

	public function edit($id)
   	{
		$race = Race::find($id);
		$drivers = Driver::lists('name', 'id');
		return View::make('races.edit')->with('race', $race)->with('drivers', $drivers);
	}

	private static function comparateScore($betA, $betB) {
		if($betA->getTotalScore() == $betB->getTotalScore()){ 
			return 0 ; 
		}
		return ($betA->getTotalScore() > $betB->getTotalScore()) ? -1 : 1;
	}

	public function show($id)
   	{
		$race = Race::find($id);
		if(!$race->hasResults()){
			return redirect('/races')->withSuccess('Carrera sin resultados.');
		}
		$betsFromRace = Bet::where('race_id','=',$race->id)->get()->all();
		usort($betsFromRace, array($this,'comparateScore'));
		return View::make('races.show')->with('race', $race)->with('bets', $betsFromRace);
	}

	public function update($id, Request $request){
		$input = $request->all();
		$race = Race::findOrFail($id);
		$this->validate($request, [
		    'p1' => 'required',
		    'p2' => 'required',
		    'p3' => 'required',
		    'p4' => 'required',
		    'p5' => 'required',
		    'pole' => 'required',
		    'fastest' => 'required',
		]);
		$race->update($input);
     	return redirect('races/'.$race->id)->withSuccess('Carrera actualizada.');
	}

}
