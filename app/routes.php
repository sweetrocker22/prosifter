<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


View::share('categories', Category::all());

//adding route for postsmcontroller.
Route::resource('posts', 'PostsController');
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');
Route::get('/category/{name}', 'CategoryController@findCategory');


//adding route to index page.
Route::get('/', 'HomeController@index');

