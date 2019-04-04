<?php

use Illuminate\Database\Seeder;
use App\Department;
class departmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['name'=>'Informatica y computacion']);
        Department::create(['name'=>'Quimica']);
        Department::create(['name'=>'Ingenierias']);
        Department::create(['name'=>'Matemáticas']);
        Department::create(['name'=>'Física']);
    }
}
