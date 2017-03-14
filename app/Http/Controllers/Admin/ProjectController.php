<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\Tag;
use Auth;
use Validator;

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
      $validator = Validator::make($request->all(),[
        'name'              =>  'required|max:250',
        'short_description' =>  'required|max:200',
        'date_alt'          =>  'max:200',
        'git'               =>  'max:200',
        'demo'              =>  'max:200',
        'url1'              =>  'max:200'
      ]);

      $project = new Project();
      $project->name = $request->input('name');
      $project->date = $request->input('date');
      $project->date_alt = $request->input('date_alt');
      $project->description = $request->input('description');
      $project->short_description = $request->input('short_description');
      $project->git = $request->input('git');
      $project->setUrl('demo', $request->input('demo'));
      $project->setUrl('external', $request->input('url1'));
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
      // Make dir for photos if not exists
      if(!file_exists("photos/".Auth::id()."/projects/".$project->slug)) {
        mkdir("photos/".Auth::id()."/projects/".$project->slug);
      }
      // Upload file
      if($request->hasFile('cover')) {
        $cover = $request->file('cover');
        $cover->storeAs("photos/".Auth::id()."/projects/".$project->slug, "cover."
            . $cover->getClientOriginalExtension());
        $cover->move("photos/".Auth::id()."/projects/".$project->slug, "cover."
            . $cover->getClientOriginalExtension());
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
        $project = Project::find($id);
        if(!$project) {
          // Try by slug
          $project = Project::where('slug', $id);
        }
        if(!$project) {
          abort(404);
        }
        return view('project-single')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.projects.edit')
                ->with('project', Project::find($id));
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
      $validator = Validator::make($request->all(),[
        'name'              =>  'required|max:250',
        'short_description' =>  'required|max:200',
        'date_alt'          =>  'max:200',
        'git'               =>  'max:200',
        'demo'              =>  'max:200',
        'url1'              =>  'max:200'
      ]);

      $project = Project::find($id);
      $project->name = $request->input('name');
      $project->date = $request->input('date');
      $project->date_alt = $request->input('date_alt');
      $project->description = $request->input('description');
      $project->short_description = $request->input('short_description');
      $project->git = $request->input('git');
      $project->setUrl('demo', $request->input('demo'));
      $project->setUrl('external', $request->input('url1'));
      $project->save();
      $project->tags()->detach();
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

      // Make dir for photos if not exists
      if(!file_exists("photos/".Auth::id()."/projects/".$project->slug)) {
        mkdir("photos/".Auth::id()."/projects/".$project->slug);
      }
      // Upload file
      if($request->hasFile('cover')) {
        $cover = $request->file('cover');
        $cover->storeAs("photos/".Auth::id()."/projects/".$project->slug, "cover."
            . $cover->getClientOriginalExtension());
        $cover->move("photos/".Auth::id()."/projects/".$project->slug, "cover."
            . $cover->getClientOriginalExtension());
      }

      return redirect()->back();
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
