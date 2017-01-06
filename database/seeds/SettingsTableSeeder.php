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
      'value' => ''
    ]);
  }
}
