<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(carrerSeeder::class);
        $this->call(departmentSeeder::class);
        $this->call(daySeeder::class);
        $this->call(subjectSeeder::class);
        $this->call(scheduleSeeder::class);
        $this->call(userSeeder::class);
        $this->call(professorSeeder::class);
        $this->call(studentSeeder::class);
        $this->call(classroomSeeder::class);
        $this->call(groupSeeder::class);
        $this->call(publicationSeeder::class);
    }
}
