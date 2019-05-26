<?php

use Illuminate\Database\Seeder;
use App\Group;
class groupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create( [
            'subject_id'=>'1','schedule_id'=>'1','day_id'=>'1','classroom_id'=>'1','professor_id'=>'1'
        ]);
        Group::create( [
            'subject_id'=>'2','schedule_id'=>'2','day_id'=>'2','classroom_id'=>'2','professor_id'=>'1'
        ]);
        Group::create( [
            'subject_id'=>'3','schedule_id'=>'3','day_id'=>'3','classroom_id'=>'3','professor_id'=>'2'
        ]);
        Group::create( [
            'subject_id'=>'4','schedule_id'=>'4','day_id'=>'4','classroom_id'=>'3','professor_id'=>'3'
        ]);
    }
}
