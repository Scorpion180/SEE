<?php

use Illuminate\Database\Seeder;
use App\Classroom;
class classroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classroom::create(['module'=>'x','classroom'=>'01']);
        Classroom::create(['module'=>'x','classroom'=>'02']);
        Classroom::create(['module'=>'x','classroom'=>'04']);
        Classroom::create(['module'=>'x','classroom'=>'05']);
        Classroom::create(['module'=>'x','classroom'=>'06']);
        
    }
}
