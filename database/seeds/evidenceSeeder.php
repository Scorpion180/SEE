<?php

use Illuminate\Database\Seeder;
use App\Evidence;
class evidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evidence::create([
            'group_id'=>'1','name'=>'Act1','due_date'=>'2019-05-29','description'=>'Actividad referente a la tarea'
        ]);
        Evidence::create([
            'group_id'=>'2','name'=>'Act1','due_date'=>'2019-05-29','description'=>'Actividad referente a la tarea'
        ]);
        Evidence::create([
            'group_id'=>'3','name'=>'Act1','due_date'=>'2019-05-29','description'=>'Actividad referente a la tarea'
        ]);
    }
}
