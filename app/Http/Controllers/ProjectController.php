<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Tag;
use Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects.index')
                ->with('projects', Project::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.add')
                ->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: validate stuff

        $project = new Project();
        $project->name = $request->input('name');
        $project->date = $request->input('date');
        $project->description = $request->input('description');
        $project->short_description = $request->input('short_description');
        $project->git = $request->input('git');
        $project->save();
        foreach(explode(',', $request->input('tags')) as $tagName) {
          $tag = Tag::where('name', strtolower($tagName))->first();
          if(!$tag) {
            $tag = new Tag();
            $tag->name = $tagName;
            $tag->save();
          }
          $id = $tag->id;
          $project->tags()->attach($id);
        }
        // Make dir for photos
        mkdir("photos/".Auth::id()."/projects/".$project->slug);
        if($request->hasFile('cover')) {
          $cover = $request->file('cover');
          $cover->storeAs("photos/".Auth::id()."/projects/".$project->slug, "cover." . $cover->getClientOriginalExtension());
          $cover->move("photos/".Auth::id()."/projects/".$project->slug, "cover." . $cover->getClientOriginalExtension());
        }

        return redirect()->to('settings/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.projects.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // TODO: check stuff
        $project = Project::find($id);
        if(!$project) {
          return redirect()->back();
        }
        
        $project->delete();
        return redirect()->back();
    }
}
