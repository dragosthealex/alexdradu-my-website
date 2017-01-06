<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
          'name'  => 'PHP'
        ]);
        Tag::create([
          'name'  => 'Python'
        ]);
        Tag::create([
          'name'  => 'Java'
        ]);
        Tag::create([
          'name'  => 'CSS'
        ]);
        Tag::create([
          'name'  => 'C#'
        ]);
        Tag::create([
          'name'  => 'C'
        ]);
        Tag::create([
          'name'  => 'C++'
        ]);
        Tag::create([
          'name'  => 'Laravel'
        ]);
        Tag::create([
          'name'  => 'Unity3D'
        ]);
        Tag::create([
          'name'  => 'Linux'
        ]);
        Tag::create([
          'name'  => 'JavaScript'
        ]);
        Tag::create([
          'name'  => 'HTML'
        ]);
        Tag::create([
          'name'  => 'Machine Learning'
        ]);
        Tag::create([
          'name'  => 'Neural Networks'
        ]);
        Tag::create([
          'name'  => 'Android'
        ]);
        Tag::create([
          'name'  => 'Game'
        ]);
        Tag::create([
          'name'  => 'Winner'
        ]);
    }
}
