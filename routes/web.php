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
Route::get('/', 'HomeController@index');
Route::get('/projects/{slug}', 'HomeController@projectSinlge');

// TODO: remove this
Route::get('/home', function () {
  return redirect('/settings');
});

// Api routes
Route::group(['prefix'=>'api'], function() {
  Route::post('/github-hook', 'ApiController@githubHook');
});

// Auth routes
Auth::routes();

// Admin routes
Route::group(['prefix' => '/settings', 'middleware' => 'auth'], function() {
  Route::get('/', function() {
    return redirect('/settings/projects');
  });
  Route::group(['prefix' => 'projects', 'middleware' => 'auth'], function() {
    Route::get('/', 'Admin\ProjectController@index');
    Route::get('/add', 'Admin\ProjectController@create');
    Route::post('/add', 'Admin\ProjectController@store');
    Route::get('/edit/{id}', 'Admin\ProjectController@edit');
    Route::post('/edit/{id}', 'Admin\ProjectController@update');
    Route::get('/delete/{id}', 'Admin\ProjectController@destroy');
  });
});
