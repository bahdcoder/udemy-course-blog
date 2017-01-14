<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);

});