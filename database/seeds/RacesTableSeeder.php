<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RacesTableSeeder extends Seeder {
    public function run() {
    	DB::table('races')->insert([
        	['id' => 1, 'name' => "2016 FORMULA 1 ROLEX AUSTRALIAN GRAND PRIX (Melbourne)"],
        	['id' => 2, 'name' => "2016 FORMULA 1 BAHRAIN GRAND PRIX (Sakhir)"],
        	['id' => 3, 'name' => "2016 FORMULA 1 PIRELLI CHINESE GRAND PRIX (Shanghai)"],
        	['id' => 4, 'name' => "2016 FORMULA 1 RUSSIAN GRAND PRIX (Sochi)"],
        	['id' => 5, 'name' => "FORMULA 1 GRAN PREMIO DE ESPAÑA PIRELLI 2016 (Catalunya)"],
        	['id' => 6, 'name' => "FORMULA 1 GRAND PRIX DE MONACO 2016 (Monte Carlo)"],
        	['id' => 7, 'name' => "FORMULA 1 GRAND PRIX DU CANADA 2016 (Montréal)"],
        	['id' => 8, 'name' => "2016 FORMULA 1 GRAND PRIX OF EUROPE (Baku)"],
        	['id' => 9, 'name' => "FORMULA 1 GROSSER PREIS VON ÖSTERREICH 2016 (Spielberg)"],
        	['id' => 10, 'name' => "2016 FORMULA 1 BRITISH GRAND PRIX (Silverstone)"],
            ['id' => 11, 'name' => "FORMULA 1 MAGYAR NAGYDÍJ 2016 (Hungaroring)"],
            ['id' => 12, 'name' => "FORMULA 1 GROSSER PREIS VON DEUTSCHLAND 2016 (Hockenheim)"],
            ['id' => 13, 'name' => "2016 FORMULA 1 BELGIAN GRAND PRIX (Spa-Francorchamps)"],
            ['id' => 14, 'name' => "FORMULA 1 GRAN PREMIO D'ITALIA 2016 (Monza)"],
            ['id' => 15, 'name' => "2016 FORMULA 1 SINGAPORE AIRLINES SINGAPORE GRAND PRIX (Singapore)"],
            ['id' => 16, 'name' => "2016 FORMULA 1 PETRONAS MALAYSIA GRAND PRIX (Kuala Lumpur)"],
            ['id' => 17, 'name' => "2016 FORMULA 1 JAPANESE GRAND PRIX (Suzuka)"],
            ['id' => 18, 'name' => "2016 FORMULA 1 UNITED STATES GRAND PRIX (Austin)"],
            ['id' => 19, 'name' => "FORMULA 1 GRAN PREMIO DE MÉXICO 2016 (Mexico City)"],
            ['id' => 20, 'name' => "FORMULA 1 GRANDE PRÊMIO DO BRASIL 2016 (São Paulo)"],
            ['id' => 21, 'name' => "2016 FORMULA 1 ETIHAD AIRWAYS ABU DHABI GRAND PRIX (Yas Marina)"],
             
		]); 
    }
    /*
        UPDATE `f1donky`.`races` SET `start`='2016-03-19 01:00:00' WHERE `id`='1';
        UPDATE `f1donky`.`races` SET `start`='2016-04-03 04:00:00' WHERE `id`='2';
        UPDATE `f1donky`.`races` SET `start`='2016-04-16 09:00:00' WHERE `id`='3';
        UPDATE `f1donky`.`races` SET `start`='2016-04-30 14:00:00' WHERE `id`='4';
        UPDATE `f1donky`.`races` SET `start`='2016-05-14 14:00:00' WHERE `id`='5';
        UPDATE `f1donky`.`races` SET `start`='2016-05-28 14:00:00' WHERE `id`='6';
        UPDATE `f1donky`.`races` SET `start`='2016-06-11 19:00:00' WHERE `id`='7';
        UPDATE `f1donky`.`races` SET `start`='2016-06-18 15:00:00' WHERE `id`='8';
        UPDATE `f1donky`.`races` SET `start`='2016-07-02 14:00:00' WHERE `id`='9';
        UPDATE `f1donky`.`races` SET `start`='2016-07-09 14:00:00' WHERE `id`='10';
        UPDATE `f1donky`.`races` SET `start`='2016-07-23 14:00:00' WHERE `id`='11';
        UPDATE `f1donky`.`races` SET `start`='2016-07-30 14:00:00' WHERE `id`='12';
        UPDATE `f1donky`.`races` SET `start`='2016-08-27 14:00:00' WHERE `id`='13';
        UPDATE `f1donky`.`races` SET `start`='2016-09-03 14:00:00' WHERE `id`='14';
        UPDATE `f1donky`.`races` SET `start`='2016-09-17 15:00:00' WHERE `id`='15';
        UPDATE `f1donky`.`races` SET `start`='2016-10-01 11:00:00' WHERE `id`='16';
        UPDATE `f1donky`.`races` SET `start`='2016-10-08 08:00:00' WHERE `id`='17';
        UPDATE `f1donky`.`races` SET `start`='2016-10-22 20:00:00' WHERE `id`='18';
        UPDATE `f1donky`.`races` SET `start`='2016-10-29 20:00:00' WHERE `id`='19';
        UPDATE `f1donky`.`races` SET `start`='2016-11-12 19:00:00' WHERE `id`='20';
        UPDATE `f1donky`.`races` SET `start`='2016-11-26 15:00:00' WHERE `id`='21';
    */
}