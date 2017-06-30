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

Route::group(['prefix' => 'admin', 'middleware' =>'auth'],function(){
    
	Route::resource('/profiles', 'ProfilerController');

    //Route::resource('/wishs','DeseosController');

    //Route::resource('/planes','PlanesController');
    
    //Route::resource('/angels','AngelsController');
    
    //Route::resource('/users','UserController');
    
    //Route::resource('/yoangel','YoangelController');
    
    /*Route::resource('/ordens','OrdensController',[
	    'only' => ['index','update']
    ]);*/
    
});

Auth::routes();
Route::get('register/verify/{token}','Auth\RegisterController@verify');