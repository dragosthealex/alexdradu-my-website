<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Tag;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $proj = Project::create([
        "name"                =>  "alexdradu.com website",
        "short_description"   =>  "My personal website (this one), made with PHP Laravel framework.",
        "date"                =>  "2017-02-07",
        "git"                 =>  "https://github.com/dragosthealex/alexdradu-my-website",
        "urls"                =>  "['http://www.alexdradu.com']"
      ]);
      $this->addTags($proj, ['laravel', 'php', 'css', 'html', 'javascript']);

      $proj = Project::create([
        "name"                =>  "ebook annotations - y3 project",
        "short_description"   =>  "Web application written in python and php that takes books from gutenberg project and annotates most uncommon words with their definition.",
        "date"                =>  "2017-02-01",
        "date_alt"            =>  "September 2016 - Ongoing",
        "git"                 =>  "https://github.com/dragosthealex/ebook-annotations",
      ]);
      $this->addTags($proj, ['python', 'machine learning', 'php', 'javascript', 'html', 'css']);

      $proj = Project::create([
        "name"                =>  "ludumdare36 (name TBD)",
        "short_description"   =>  "A game I'm currently working on, FPS multiplayer built with Unity3d. Takes place in 0G environment, with (to be) awesome physics.",
        "date"                =>  "2017-02-02",
        "date_alt"            =>  "August 2016 - Ongoing",
        "git"                 =>  "https://github.com/dragosthealex/LudumDare36",
        "urls"                =>  "[]"
      ]);
      $this->addTags($proj, ['unity3d', 'c#', 'game']);

      $proj = Project::create([
        "name"                =>  "Cognitive Crowds",
        "short_description"   =>  "When you give a talk, you record the audience, upload the video to our web dashboard, and using Microsoft's Cognitive Services API we analyse the publc's attention and emotions over the presentation.",
        "date"                =>  "2017-01-29",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/thee-engineer/cambridgehack-2017",
        "urls"                =>  "['https://devpost.com/software/cognitive-crowds-d4zchg']"
      ]);
      $this->addTags($proj, ['machine learning', 'python', 'php', 'winner', 'javascript', 'css', 'hackathon']);

      $proj = Project::create([
        "name"                =>  "AspirezHigh",
        "short_description"   =>  "Job posting website aimed at high-school students in USA. Allows employers to register and post opportunities and students to create a profile, search for and apply to them.",
        "date"                =>  "2017-01-01",
        "date_alt"            =>  "2016 - 2017",
        "git"                 =>  "",
        "urls"                =>  "['http://www.aspirezhigh.com']"
      ]);
      $this->addTags($proj, ['laravel', 'php', 'javascript', 'css', 'html', 'python', 'production']);

      $proj = Project::create([
        "name"                =>  "Tweetpredict",
        "short_description"   =>  "Using sentiment analysis on tweets collected out of customer-driven companies we output a graph showing the trend of the company, share price over time axis.",
        "date"                =>  "2016-11-27",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/dragosthealex/hack-kings3.0",
        "urls"                =>  "['https://devpost.com/software/tweetpredict']"
      ]);
      $this->addTags($proj, ['machine learning', 'neural networks', 'python', 'hackathon']);

      $proj = Project::create([
        "name"                =>  "autoDJ",
        "short_description"   =>  "A machine learning program that generates a new song that will match input text from the user.",
        "date"                =>  "2016-11-20",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/thee-engineer/oxfordhack-2016",
        "urls"                =>  "['https://devpost.com/software/autodj-i87zrp']"
      ]);
      $this->addTags($proj, ['machine learning', 'neural networks', 'python', 'winner', 'hackathon', ]);

      $proj = Project::create([
        "name"                =>  "Photo Merge",
        "short_description"   =>  "A web and mobile application that helps people attending events put all their pictures together.",
        "date"                =>  "2016-11-13",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/dragosthealex/great-uni-hack-2016",
        "urls"                =>  "['https://devpost.com/software/great-uni-hack-2016']"
      ]);
      $this->addTags($proj, ['android', 'java', 'php', 'winner', 'hackathon']);

      $proj = Project::create([
        "name"                =>  "AutoMapr",
        "short_description"   =>  "Using LiDAR sensors data (point cloud), we were able to correctly count and identify pieces of railroad infrastructure.",
        "date"                =>  "2016-11-4",
        "date_alt"            =>  "",
        "git"                 =>  "",
        "urls"                =>  "[]"
      ]);
      $this->addTags($proj, ['c++', 'python', 'hackathon', 'winner']);

      $proj = Project::create([
        "name"                =>  "Manchester SU Freshers' Week Events",
        "short_description"   =>  "A website for the Manchester Students' Union Welcome Week events. Used during the fresher's week 2016. Planned to be furtherly used for SU societies' events.",
        "date"                =>  "2016-09-01",
        "date_alt"            =>  "July 2016 - September 2016",
        "git"                 =>  "https://github.com/dragosthealex/manchester_su_events",
        "urls"                =>  "[]"
      ]);
      $this->addTags($proj, ['php', 'laravel', 'html', 'javascript', 'css', 'production']);

      $proj = Project::create([
        "name"                =>  "Z0ne-Challenge",
        "short_description"   =>  "Through providing money prizes to users who obtain the highest scores, it motivates them to donate to different charities, as a donation directly increases the score.",
        "date"                =>  "2015-12-12",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/dragosthealex/hackkings_2015",
        "urls"                =>  "['https://devpost.com/software/z0ne-challenge']"
      ]);
      $this->addTags($proj, ['android', 'game', 'ionic', 'javascript', 'css', 'winner', 'hackathon']);

      $proj = Project::create([
        "name"                =>  "hi-Dare",
        "short_description"   =>  "By Challenging your friends, you put a price on those dares. When they complete them and provide proof, you need to donate a sum of money to a charity, with the help of JustGiving API.",
        "date"                =>  "2015-12-06",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/andreimuntean/GreatUniHack2015",
        "urls"                =>  "['https://devpost.com/software/hi-dare']"
      ]);
      $this->addTags($proj, ['android', 'ionic', 'javascript', 'php', 'hackathon', 'winner']);

      $proj = Project::create([
        "name"                =>  "CorridorPutin",
        "short_description"   =>  "Unity FPS game with a Soviet twist. Spend a day in the shoes of the great Putin and kill some enemies around Kremlin.",
        "date"                =>  "2015-08-24",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/dragosthealex/leap-music",
        "urls"                =>  "['http://www.pyrogoats.dx.am']"
      ]);
      $this->addTags($proj, ['unity3d', 'c#', 'game']);

      $proj = Project::create([
        "name"                =>  "Leap Music",
        "short_description"   =>  "LeapMotion app that allows mixing tracks using hand gestures.",
        "date"                =>  "2015-06-09",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/dragosthealex/leap-music",
        "urls"                =>  "[]"
      ]);
      $this->addTags($proj, ['unity3d', 'c#', 'hackathon', 'winner']);

      $proj = Project::create([
        "name"                =>  "BloomBurgers",
        "short_description"   =>  "Educative game where you kill zombies by solving maths.",
        "date"                =>  "2014-12-7",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/dragosthealex/bloomburgers",
        "urls"                =>  "[]"
      ]);
      $this->addTags($proj, ['java', 'game', 'hackathon']);

      $proj = Project::create([
        "name"                =>  "Roomies",
        "short_description"   =>  "Roomies is a room-mate matching site with a university accommodation review service. This helps university students find room-mates to stay with, and helps them choose what accommodation to stay at.",
        "date"                =>  "2015-04-25",
        "date_alt"            =>  "September 2014 - April 2015",
        "git"                 =>  "https://github.com/dragosthealex/roomies",
        "urls"                =>  "[]"
      ]);
      $this->addTags($proj, ['php', 'html', 'css', 'javascript']);

      $proj = Project::create([
        "name"                =>  "MathPy",
        "short_description"   =>  "Educative game where you kill zombies by solving maths.",
        "date"                =>  "2014-12-7",
        "date_alt"            =>  "",
        "git"                 =>  "https://github.com/dragosthealex/strathhack_2014_mathpy",
        "urls"                =>  "[]"
      ]);
      $this->addTags($proj, ['python', 'winner', 'hackathon', 'game']);
    }

    private function addTags($project, $tagsArr) {
      foreach($tagsArr as $tagName) {
        $tag = Tag::where('name', $tagName)->first();
        if(!$tag) {
          $tag = new Tag();
          $tag->name = $tagName;
          $tag->save();
        }
        $project->tags()->attach($tag->id);
      }
    }
}
