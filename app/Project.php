<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

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

  public function getUrlsAttribute($value) {
    if(!$value) {
      return [];
    }
    if(!json_decode($value, 1)) {
      $value = preg_replace("/\'/", "\"", $value);
      $value = json_decode($value, 1);
    }
    if(!$value) {
      return [];
    }
    return $value;
  }

  // Check if has cover
  public function hasCover() {
    if(file_exists('photos/1/projects/'.$this->slug.'/cover.png')) {
      return asset('photos/1/projects/'.$this->slug.'/cover.png');
    }
    return false;
  }
  // Get cover / image
  public function getCover() {
    if($this->hasCover()) {
      return $this->hasCover();
    }
    return asset('photos/no-photo.png');
  }
}

?>
