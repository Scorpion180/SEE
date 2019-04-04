<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_professor', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('group_id');
            $table->unsignedInteger('professor_id');

            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('group_professor', function (Blueprint $table) {
            //
        });
    }
}
