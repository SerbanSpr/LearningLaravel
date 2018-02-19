<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/post/people/example', array('as'=>'admin.home', function() {
  $url = route('admin.home');
  return "this URL is " . $url;
}));

//Route::get('/post/{id}', 'PostController@index');

//Route::resource('post', 'PostController');

Route::get('/contact', 'PostController@contact');

Route::get('/post/{id}/{name}/{ps}', 'PostController@showPost');
