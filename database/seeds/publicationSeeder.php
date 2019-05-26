<?php

use Illuminate\Database\Seeder;
use App\Publication;
class publicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publication::create([
            'title'=>'Holi', 'description'=>'IDK','group_id'=>'1'
        ]);
    }
}
