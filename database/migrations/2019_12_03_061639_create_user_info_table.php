<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->foreign('user_id')
                ->references('user_id')->on('user_creds');
            $table->string('full_name');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('nationality');
            $table->date('dob');
            $table->integer('personal_number');
            $table->integer('whatsapp_number');
            $table->string('skype');
            $table->string('email_id');
            $table->string('website');
            $table->integer('zip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
