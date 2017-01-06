<?php

use App\Setting;

// Get the value of an option with the given name
function get_option($name) {
  $setting = Setting::where('name', $name)->first();
  if(!$setting) {
    return "";
  }
  return $setting->value;
}

// Set an option with a given name to the given value
function set_option($name, $value) {
  $setting = Setting::where('name', $name)->first();
  if(!$setting) {
    $setting = new Setting();
    $setting->name = $name;
  }
  $setting->value = $value;
}


?>
