<?php

use Illuminate\Database\Seeder;
use App\Student;
class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(['user_id'=>'4','carrer_id'=>'2']);
    }
}
