<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {
    public function run() {
    	DB::table('users')->insert([
        	['id' => 1, 'name' => "Hernán", 'email' => "hernanmorenodaguerre@gmail.com"],
        	['id' => 2, 'name' => "Raúl", 'email' => "raulma79@hotmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
        	['id' => 3, 'name' => "Andrés", 'email' => "kurty2005@hotmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
        	['id' => 4, 'name' => "David", 'email' => "dmarjim@hotmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
        	['id' => 5, 'name' => "Gema", 'email' => "gembade@hotmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
        	['id' => 6, 'name' => "Calero", 'email' => "jorgecalero.m@gmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
            ['id' => 7, 'name' => "Adri", 'email' => "adriqueipo81@hotmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
        	['id' => 8, 'name' => "Javi", 'email' => "vito_ja@hotmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
            ['id' => 9, 'name' => "Marta", 'email' => "mgarbayo@gmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
            ['id' => 10, 'name' => "Berni", 'email' => "bernisheart@hotmail.com", 'password' => bcrypt('briatore'), 'is_admin' => true],
            ['id' => 11, 'name' => "Alcolea", 'email' => "alcolea@gmail.com", 'password' => bcrypt('briatore'), 'is_admin' => false],
		]); 
    }
}