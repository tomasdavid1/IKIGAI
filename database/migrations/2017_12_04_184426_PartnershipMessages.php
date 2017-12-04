<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartnershipMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('partnershipMessages', function ($table) {
      $table->increments('id');
      $table->integer('sender_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');
      $table->integer('reciever_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');
      $table->string('body');
      $table->integer('project_id');
      $table->foreign('project_id')->references('id')->on('projects');
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
        //
    }
}
