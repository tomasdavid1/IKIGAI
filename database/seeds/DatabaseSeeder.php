<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Message;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //$projects = factory(Project::class)->times(50)->create();
      $messages = factory(Message::class)->times(50)->create();
    }
}
