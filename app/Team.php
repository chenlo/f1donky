<?php

namespace F1donky;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    
    public $timestamps = false;

    protected $fillable = ['name'];

    public function drivers(){
       return $this->hasMany('F1Donky\Driver');
    }

    public function getName(){
    	return $this->name;
    }
}
