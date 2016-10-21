<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TeamsTableSeeder extends Seeder {
    public function run() {
        DB::table('teams')->insert([
            ['id' => 1, 'name' => "Mercedes"],
            ['id' => 2, 'name' => "Ferrari"],
            ['id' => 3, 'name' => "Williams"],
            ['id' => 4, 'name' => "Red Bull Racing"],
            ['id' => 5, 'name' => "Force India"],
            ['id' => 6, 'name' => "Toro Rosso"],
            ['id' => 7, 'name' => "Sauber"],
            ['id' => 8, 'name' => "McLaren"],
            ['id' => 9, 'name' => "Haas"],
            ['id' => 10, 'name' => "Manor Racing"],
            ['id' => 11, 'name' => "Renault"],
        ]); 
    }
}