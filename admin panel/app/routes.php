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

Route::get('/', function()
{
	return View::make('hello');
});



Route::get('/adminPanel',function(){


	return View::make('admin.main');
});

Route::resource('adminPanel/topic','topicController');
Route::resource('adminPanel/topic/create','topicController@create');
Route::resource('adminPanel/topic/all','topicController@all');


// add new topic
Route::get('adminPanel/topic/create/{type}',function($type){


	return View::make('adminPanel/topic/create')->with('type',$type);
});



//show  all topics 
Route::get('adminPanel/topic/all/{type}',function($type){

	
	return View::make('adminPanel/topic/all')->with('type',$type);
});

//edit topics








