<?php

use Illuminate\Database\Seeder;
use App\Professor;
class professorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professor::create(['user_id'=>'1','department_id'=>'1']);
        Professor::create(['user_id'=>'2','department_id'=>'1']);
        Professor::create(['user_id'=>'3','department_id'=>'2']);
    }
}
