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
   protected $table = 'tags';

   /**
    * The roles that belong to the user.
    */
    function projects() {
      return $this->belongsToMany('App\Project', 'project_tag',
         'tag_id', 'project_id');
    }

    // Accesor for name
    public function getNameAttribute($value) {
      $value = preg_replace("/ /", "-", $value);
      $value = preg_replace("/\#/", "sharp", $value);
      return $value;
    }
}

?>
