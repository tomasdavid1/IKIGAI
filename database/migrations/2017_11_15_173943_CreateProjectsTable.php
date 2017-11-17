<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
  public function up() {
     Schema::create('projects', function ($table) {
     $table->increments('id');
     $table->string('title');
     $table->bigInteger('summ');
     $table->string('author');
     $table->bigInteger('rating');
     $table->string('location');
     $table->string('summary');
     $table->longText('descrpition');

     });
   }
 public function down() {
   Schema::drop('projects');
 }
}
