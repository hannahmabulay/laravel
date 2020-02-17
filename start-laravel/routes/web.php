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
    return view('homepage');
});


//============================================ ROUTES =====================================================
// BASIC ROUTING
Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

// ROUTE PARAMETERS
// Reguired Parameters
Route::get('/post/{id}', function ($id) {
    return "the value of {id} is " . $id;
});

// Optional Parameters
Route::get('/user/{name?}', function ($name=null) {
    return "the value of {name} is " . $name;
});

// NAMED ROUTES
Route::get('settings/profile', function () {

  // Generating URLs...
  $url = route('profile');

  return $url;

  // Generating Redirects...
  // return redirect()->route('user.profile','Bill');

  // php artisan route:list

})->name('profile');
