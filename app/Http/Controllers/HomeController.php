<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Tag;

class HomeController extends Controller
{
    /**
    * Show the landing page.
    *
    * @param String
    * @return \Illuminate\Http\Response
    */
    public function index() {
      return view('home')
              ->with('tags', App\Tag::all())
              ->with('projects', App\Project::with('tags')->get());
    }

    /**
    * Show the page for a single project.
    *
    * @param String
    * @return \Illuminate\Http\Response
    */
    public function projectSingle($slug) {
      return view('projects.index')
              ->with('project', App\Project::where('slug', $slug)->first());
    }
}
