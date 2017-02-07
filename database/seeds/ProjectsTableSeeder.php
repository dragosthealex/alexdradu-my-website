<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Project::create([
        "name"                =>  "alexdradu.com website",
        "short_description"   =>  "My personal website (this one), made with PHP Laravel framework.",
        "date"                =>  "2017-02-07",
        "git"                 =>  "https://github.com/dragosthealex/alexdradu-my-website",
        "urls"                =>  "['www.alexdradu.com']"
      ]);
    }
}
