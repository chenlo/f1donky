<?php

namespace F1donky;

use Illuminate\Foundation\Auth\User as Authenticatable;
use F1donky\Bet;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    public function bets() {
        return $this->hasMany('F1donky\Bet');
    }
    
    public function owns(Bet $bet) {
        return $this->id == $bet->user_id;
    }

    public function isAdmin()
    {
        return $this->getAttribute('is_admin');
    }

    public function getName(){
        return $this->name;
    }

    public function getTotalScore(){
        $count = 0;
        foreach ($this->bets as $bet) {
            $count += $bet->getTotalScore();   
        }
        return $count;
    }

    public function hasBetInRace(Race $race){
        $hasBetInRace = false;
        foreach ($this->bets as $bet) {
            if($bet->race_id==$race->id){
                $hasBetInRace = true;
            }
        }
        return $hasBetInRace;
    }
}