<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->foreign('user_id')
                ->references('user_id')->on('user_creds')
                ->onDelete('cascade');
            $table->bigIncrements('skill_id');
            $table->string('skill_name');
            $table->integer('knowledge');
            $table->string('skill_type');
            $table->string('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
