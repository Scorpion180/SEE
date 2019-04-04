<?php

use Illuminate\Database\Seeder;
use App\Day;
class daySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::create(['name'=>'LI']);
        Day::create(['name'=>'MJ']);
        Day::create(['name'=>'IV']);
        Day::create(['name'=>'S']);
    }
}
