<?php

namespace App\Observers;

use App\Project;
use Auth;

class ProjectObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(Project $project)
    {
      // Make the slug
      $project->slug = str_slug($project->name);
      $project->save();
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(Project $project)
    {
      // Delete stuff associated
      // Move photos to archive
      if(file_exists("photos/".Auth::id()."/projects/".$project->slug)) {
        rename("photos/".Auth::id()."/projects/".$project->slug, "archives/".Auth::id()."/".$project->slug."_".date('dmY_His'));
      }
      // Delete project and tags
      $project->tags()->delete();
    }
}
