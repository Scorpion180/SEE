<?php

use Illuminate\Database\Seeder;
use App\Subject;
class subjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(['name'=>'Programación']);
        Subject::create(['name'=>'Estructura de datos II']);
        Subject::create(['name'=>'Algoritmia']);
        Subject::create(['name'=>'Teoría de la computación']);
    }
}
