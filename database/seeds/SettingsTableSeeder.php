<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Setting::create([
      'name'  => 'my_name',
      'value' => 'Alex Radu'
    ]);
    Setting::create([
      'name'  => 'name_subtitle',
      'value' => 'Software Engineer'
    ]);
    Setting::create([
      'name'  => 'quote',
      'value' => 'With enough determination, everything is possible'
    ]);
    Setting::create([
      'name'  => 'profile_pic',
      'value' => 'img/misc/profile.jpg'
    ]);
    Setting::create([
      'name'  => 'linkedin_url',
      'value' => 'https://uk.linkedin.com/in/dragosthealex'
    ]);
    Setting::create([
      'name'  => 'github_url',
      'value' => 'https://github.com/dragosthealex'
    ]);
    Setting::create([
      'name'  => 'facebook_url',
      'value' => 'https://www.facebook.com/dalexradu'
    ]);
    Setting::create([
      'name'  => 'instagram_url',
      'value' => 'https://www.instagram.com/dragosthealx'
    ]);
    Setting::create([
      'name'  => 'gplus_url',
      'value' => 'https://plus.google.com/u/0/113055544527860966361'
    ]);
  }
}
