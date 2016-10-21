<?php

namespace F1donky;

use Illuminate\Database\Eloquent\Model;
use F1donky\Driver;
use F1donky\Race;
use F1donky\Bet;

use Carbon\Carbon;

class Race extends Model 
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'races';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'start', 'pole', 'fastest', 'p1', 'p2', 'p3', 'p4', 'p5' ];

    public function bets(){
       return $this->hasMany('F1donky\Bet');
    }

    public function mainName(){
        $pos = strpos($this->name, '(');

        return substr($this->name, 0, $pos-1);
    }

    public function isStarted(){
        $current = Carbon::now();
        return $this->start < $current;
    }

    public function isNext(){
        $current = Carbon::now();
        return $this->start < $current;
    }

    public function getDateDiffHumans() {
        return Carbon::parse($this->start)->diffForHumans();
    }

    public function getBets() {
        return $this->bets;
    }

    public function getNameP1(){
        return Driver::find($this->p1)->getFullName();
    }

    public function getNameP2(){
        return Driver::find($this->p2)->getFullName();
    }

    public function getNameP3(){
        return Driver::find($this->p3)->getFullName();
    }

    public function getNameP4(){
        return Driver::find($this->p4)->getFullName();
    }

    public function getNameP5(){
        return Driver::find($this->p5)->getFullName();
    }

    public function getNamePole(){
        return Driver::find($this->pole)->getFullName();
    }

    public function getNameFastest(){
        return Driver::find($this->fastest)->getFullName();
    }

    public function isFirstRaceOfSeason(){
        $prev_race = Race::find($this->id-1);
        return $prev_race==null;

    }

    public function isLastRaceOfSeason(){
        $next_race = Race::find($this->id+1);
        return $next_race==null;
    }

    public function hasNextResults(){
        $next_bets = Bet::all()->where('race_id',$this->id+1);
        return $next_bets->count()>1;
    }

    public function hasResults(){
        $next_bets = Bet::all()->where('race_id',$this->id);
        
        return $next_bets->count()>1;
    }
}
