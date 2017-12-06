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
      Schema::create('partnership_messages', function ($table) {
      $table->increments('id');
      $table->integer('sender_id')->unsigned();
      $table->foreign('sender_id')->references('id')->on('users');
      $table->integer('reciever_id')->unsigned();
      $table->foreign('reciever_id')->references('id')->on('users');
      $table->string('body');
      $table->integer('project_id')->unsigned();
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
        Schema::dropIfExists('partnershipMessages');
    }
}
