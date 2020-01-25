<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencesGivensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references_given', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->foreign('user_id')
                ->references('user_id')->on('user_creds')
                ->onDelete('cascade');
            $table->bigIncrements('reference_id');
            $table->string('referrer');
            $table->string('referrer_designation');
            $table->string('reference');
            $table->string('image_location');
            $table->string('display');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('references_givens');
    }
}
