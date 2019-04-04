<?php

use Illuminate\Database\Seeder;
use App\Schedule;
class scheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create(['name'=>'7:00-9:00']);
        Schedule::create(['name'=>'9:00-11:00']);
        Schedule::create(['name'=>'11:00-13:00']);
        Schedule::create(['name'=>'13:00-15:00']);
        Schedule::create(['name'=>'15:00-17:00']);
        Schedule::create(['name'=>'17:00-19:00']);
        Schedule::create(['name'=>'19:00-21:00']);
    }
}
