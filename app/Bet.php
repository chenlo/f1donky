<?php

namespace F1donky;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model 
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bets';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pole', 'fastest', 'p1', 'p2', 'p3', 'p4', 'p5', 'race_id', 'user_id' ];

    private $points = array( 
        'p1'=>25, 
        'p2'=>18, 
        'p3'=>15,
        'p4'=>12,
        'p5'=>10,
        'pole'=>10,
        'fastest'=>10,
        'bonus'=>50,
        'unordered'=>10, 
    );

    public function race(){
       return $this->belongsTo('F1donky\Race');
    }

    public function user(){
       return $this->belongsTo('F1donky\User');
    }

    public function getNameP1(){
        return Driver::find($this->p1)->getLastName();
    }

    public function getNameP2(){
        return Driver::find($this->p2)->getLastName();
    }

    public function getNameP3(){
        return Driver::find($this->p3)->getLastName();
    }

    public function getNameP4(){
        return Driver::find($this->p4)->getLastName();
    }

    public function getNameP5(){
        return Driver::find($this->p5)->getLastName();
    }

    public function getNamePole(){
        return Driver::find($this->pole)->getLastName();
    }

    public function getNameFastest(){
        return Driver::find($this->fastest)->getLastName();
    }

    public function hasFivePilotsUnordered(){
        $driversGuessed = array();
        $firstFiveDriversInRace = array($this->race->p1,$this->race->p2,$this->race->p3,$this->race->p4,$this->race->p5);
        $firstFiveDriversInBet = array($this->p1,$this->p2,$this->p3,$this->p4,$this->p5);
        foreach($firstFiveDriversInBet as $key=>$val){
            if(in_array($val,$firstFiveDriversInRace)){
                $driversGuessed[] = $val;
            }
        }
        if(count($driversGuessed)==5&&(array_sum($firstFiveDriversInRace)==array_sum($firstFiveDriversInBet))){
            return true;
        } else {
            return false;
        }
    }

    public function hasGuessedP1(){
        return $this->p1==$this->race->p1;
    }

    public function hasGuessedP2(){
        return $this->p2==$this->race->p2;
    }

    public function hasGuessedP3(){
        return $this->p3==$this->race->p3;
    }

    public function hasGuessedP4(){
        return $this->p4==$this->race->p4;
    }

    public function hasGuessedP5(){
        return $this->p5==$this->race->p5;
    }

    public function hasGuessedPole(){
        return $this->pole==$this->race->pole;
    }

    public function hasGuessedFastest(){
        return $this->fastest==$this->race->fastest;
    }

    public function hasBonus(){
        $count = 0;
        if($this->hasGuessedP1()){
            $count++;
        }
        if($this->hasGuessedP2()){
            $count++;
        } 
        if($this->hasGuessedP3()){
            $count++;
        } 
        if($this->hasGuessedP4()){
            $count++;
        } 
        if($this->hasGuessedP5()){
            $count++;
        }  
        return $count>=4; 
    }

    public function getTotalScore() {
        
        $score = 0;
        
        if($this->hasGuessedP1()) $score += $this->points['p1'];
        if($this->hasGuessedP2()) $score += $this->points['p2'];
        if($this->hasGuessedP3()) $score += $this->points['p3'];
        if($this->hasGuessedP4()) $score += $this->points['p4'];
        if($this->hasGuessedP5()) $score += $this->points['p5'];
        if($this->hasGuessedPole()) $score += $this->points['pole'];
        if($this->hasGuessedFastest()) $score += $this->points['fastest'];
        if($this->hasFivePilotsUnordered()) $score += $this->points['unordered'];
        if($this->hasBonus()) $score +=  $this->points['bonus']; 
    
        return $score;
    }

}