<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use database\seeds\UsersTableSeeder;
use database\seeds\TeamsTableSeeder;
use database\seeds\DriversTableSeeder;
use database\seeds\RacesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Model::unguard();
        $this->call('UsersTableSeeder');
        $this->call('TeamsTableSeeder');
        $this->call('DriversTableSeeder');
        $this->call('RacesTableSeeder');
        Model::reguard();
    }
}
