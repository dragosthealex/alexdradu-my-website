<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('home')
          ->with('tags', App\Tag::all())
          ->with('projects', App\Project::with('tags')->get());
});

Auth::routes();

Route::get('/home', function () {
  return redirect('/settings');
});
Route::get('/settings', 'HomeController@settings');
