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
          'name'  => 'php'
        ]);
        Tag::create([
          'name'  => 'python'
        ]);
        Tag::create([
          'name'  => 'java'
        ]);
        Tag::create([
          'name'  => 'css'
        ]);
        Tag::create([
          'name'  => 'c#'
        ]);
        Tag::create([
          'name'  => 'c'
        ]);
        Tag::create([
          'name'  => 'c++'
        ]);
        Tag::create([
          'name'  => 'laravel'
        ]);
        Tag::create([
          'name'  => 'unity3d'
        ]);
        Tag::create([
          'name'  => 'linux'
        ]);
        Tag::create([
          'name'  => 'javascript'
        ]);
        Tag::create([
          'name'  => 'html'
        ]);
        Tag::create([
          'name'  => 'machine learning'
        ]);
        Tag::create([
          'name'  => 'neural networks'
        ]);
        Tag::create([
          'name'  => 'android'
        ]);
        Tag::create([
          'name'  => 'game'
        ]);
        Tag::create([
          'name'  => 'winner'
        ]);
    }
}
