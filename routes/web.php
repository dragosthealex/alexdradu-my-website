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

// User routes
Route::get('/', function () {
  return view('home')
          ->with('tags', App\Tag::all())
          ->with('projects', App\Project::with('tags')->get());
});
Route::get('/projects/{slug}', function($slug) {
  return view('projects.index')
          ->with('project', App\Project::where('slug', $slug)->first()
                              ->with('tags'));
});

// Auth
Auth::routes();

// TODO: remove this
Route::get('/home', function () {
  return redirect('/settings');
});

// Admin routes
Route::group(['prefix' => '/settings', 'middleware' => 'auth'], function() {
  Route::get('/', function() {
    return redirect('/settings/projects');
  });
  Route::group(['prefix' => 'projects', 'middleware' => 'auth'], function() {
    Route::get('/', 'ProjectController@index');
    Route::get('/add', 'ProjectController@create');
    Route::post('/add', 'ProjectController@store');
    Route::get('/edit/{id}', 'ProjectController@edit');
    Route::post('/edit/{id}', 'ProjectController@update');
    Route::get('/delete/{id}', 'ProjectController@destroy');
  });
});
