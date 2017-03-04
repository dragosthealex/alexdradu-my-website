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
    * @return \Illuminate\Http\Response
    */
    public function index() {
      return view('home')
              ->with('tags', Tag::all())
              ->with('projects', Project::with('tags')->get());
    }

    /**
    * Show the page for a single project.
    *
    * @param String
    * @return \Illuminate\Http\Response
    */
    public function projectSingle($id_slug)
    {
        $project = Project::find($id_slug);
        if(!$project) {
          // Try by slug
          $project = Project::where('slug', $id_slug)->first();
        }
        if(!$project) {
          abort(404);
        }
        return view('project-single')->with('project', $project);
    }

    /**
    * Show the page for cv.
    *
    * @return \Illuminate\Http\Response
    */
    public function cv() {
      return view('cv');
    }
}
