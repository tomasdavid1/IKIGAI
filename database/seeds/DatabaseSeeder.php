<?php

use Illuminate\Database\Seeder;
use App\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $actors = factory(Project::class)->times(50)->create();
    }
}
