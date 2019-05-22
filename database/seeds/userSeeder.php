<?php

use Illuminate\Database\Seeder;
use App\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Efren Hernandez', 
        'email'=>'efren@gmail.com',
        'code'=>'216788244',
        'username'=>'efren180',
        'password'=>Hash::make('123456789')]);
        User::create(['name'=>'Sara Elvira Lopez de la Mora', 
        'email'=>'sarita@gmail.com',
        'code'=>'123451239',
        'username'=>'sarita123',
        'password'=>Hash::make('123456789')]);
        User::create(['name'=>'Roberto Gongora Arjona', 
        'email'=>'silverino@gmail.com',
        'code'=>'129033745',
        'username'=>'silverwing',
        'password'=>Hash::make('123456789')]);
        User::create(['name'=>'Elizabeth Solis', 
        'email'=>'eli@gmail.com',
        'code'=>'283456812',
        'username'=>'elitrope',
        'password'=>Hash::make('123456789')]);
    }
}
