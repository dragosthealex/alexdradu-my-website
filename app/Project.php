<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
   protected $table = 'projects';


  /**
   * The roles that belong to the user.
   */
   function tags() {
     return $this->belongsToMany('App\Tag', 'project_tag',
        'project_id', 'tag_id');
  }

}

?>
