<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectsCollaborators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects_collaborators', function ($table) {
      $table->increments('id');
      $table->integer('collaborator_id')->unsigned();
      $table->foreign('collaborator_id')->references('id')->on('users');
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
      Schema::dropIfExists('projects_collaborators');

    }
}
