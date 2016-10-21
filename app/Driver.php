<?php

namespace F1donky;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers';
    
    public $timestamps = false;

    protected $fillable = ['name','team_id'];

    public function team(){
       return $this->belongsTo('F1Donky\Team');
    }

    public function getFullName(){
    	return $this->name;
    }

    public function getLastName(){
    	$parts = explode(' ', $this->name);
    	return $parts[1];
    }

    public function getFirstName(){
    	$parts = explode(' ', $this->name);
    	return $parts[0];
    }

    public function getTeamName(){
    	return Team::find($this->team_id)->getName();
    }
}
