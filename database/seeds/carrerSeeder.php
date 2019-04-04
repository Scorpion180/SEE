<?php

use Illuminate\Database\Seeder;
use App\Carrer;
class carrerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrer::create(['name'=>'Ing. en computación']);
        Carrer::create(['name'=>'Ing. civil']);
        Carrer::create(['name'=>'Lic. quimico farmaco biologo']);
    }
}
