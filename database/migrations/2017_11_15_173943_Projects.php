<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
  public function up() {
     Schema::create('projects', function ($table) {
     $table->increments('id');
     $table->string('title');
     $table->float('summX')->nullable();
     $table->float('summY')->nullable();
     $table->string('author');
     $table->bigInteger('rating');
     $table->string('location');
     $table->string('summary');
     $table->longText('description');
     $table->timestamps();


     });
   }
 public function down() {
   Schema::dropIfExists('projects');
 }
}
