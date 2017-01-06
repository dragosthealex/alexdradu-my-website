<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
   protected $table = 'settings';

   /**
    * The roles that belong to the user.
    */
    function projects() {
      return $this->belongsToMany('App\Project', 'project_tag',
         'tag_id', 'project_id');
    }
}

?>
