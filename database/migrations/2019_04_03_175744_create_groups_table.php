<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('schedule_id');
            $table->unsignedInteger('day_id');
            $table->unsignedInteger('classroom_id');
            $table->unsignedInteger('professor_id');
            
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('restrict');
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('restrict');
            $table->foreign('day_id')->references('id')->on('days')->onDelete('restrict');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('restrict');
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groups', function (Blueprint $table) {
            //
        });
    }
}
