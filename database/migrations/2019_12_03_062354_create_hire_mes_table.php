<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHireMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hire_me', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->foreign('user_id')
                ->references('user_id')->on('user_creds')
                ->onDelete('cascade');
            $table->bigIncrements('job_id');
            $table->integer('job_rate');
            $table->string('job_description');
            $table->string('job_type');
            $table->string('Active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hire_mes');
    }
}
