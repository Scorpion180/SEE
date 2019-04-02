<?php

use Illuminate\Database\Seeder;
use App\Department;
class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //se puede utilizar si en el modelo tienes un fillable declarado
        //Department::create(['nombre'=>'Departamento de informatica y computacion']);
        //Para generar con factory
        factory(App\Department::class,10)->create();
    }
}
