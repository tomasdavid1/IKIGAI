<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Message;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $users = factory(User::class)->times(50)->create();
      $projects = factory(Project::class)->times(50)->create();
      $messages = factory(Message::class)->times(50)->create();
    }
}
