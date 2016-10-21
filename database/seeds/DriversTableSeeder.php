<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
        	['id' => 1, 'name' => "Lewis Hamilton", 'team_id' => 1],
        	['id' => 2, 'name' => "Nico Rosberg", 'team_id' => 1],
        	['id' => 3, 'name' => "Sebastian Vettel", 'team_id' => 2],
        	['id' => 4, 'name' => "Kimi Räikkönen", 'team_id' => 2],
        	['id' => 5, 'name' => "Felipe Massa", 'team_id' => 3],
        	['id' => 6, 'name' => "Valtteri Bottas", 'team_id' => 3],
        	['id' => 7, 'name' => "Daniel Ricciardo", 'team_id' => 4],
        	['id' => 8, 'name' => "Daniil Kvyat", 'team_id' => 4],
            ['id' => 9, 'name' => "Sergio Pérez", 'team_id' => 5],
        	['id' => 10, 'name' => "Nico Hulkenberg", 'team_id' => 5],
            ['id' => 11, 'name' => "Max Verstappen", 'team_id' => 6],
            ['id' => 12, 'name' => "Carlos Sainz", 'team_id' => 6],
            ['id' => 13, 'name' => "Marcus Ericsson", 'team_id' => 7],
            ['id' => 14, 'name' => "Felipe Nasr", 'team_id' => 7],
            ['id' => 15, 'name' => "Fernando Alonso", 'team_id' => 8],
            ['id' => 16, 'name' => "Jenson Button", 'team_id' => 8],
            ['id' => 17, 'name' => "Romain Grosjean", 'team_id' => 9],
            ['id' => 18, 'name' => "Esteban Gutiérrez", 'team_id' => 9],
            ['id' => 19, 'name' => "Pascal Wehrlein", 'team_id' => 10],
            ['id' => 20, 'name' => "Rio Haryanto", 'team_id' => 10],
            ['id' => 21, 'name' => "Kevin Magnussen", 'team_id' => 11],
            ['id' => 22, 'name' => "Jolyon Palmer", 'team_id' => 11],
		]); 
    }
}
