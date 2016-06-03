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

//Route::group(['middleware'=>['web']], function(){

	Route::get('/', 'HomeController@index');
	Route::get('/delete/{album}', 'HomeController@delete');
	Route::post('/create', 'HomeController@create');
	Route::patch('/update/{album}', 'HomeController@update');
	Route::get('/search-sort', 'HomeController@search_sort');
	Route::get('/search', 'HomeController@Search');

//});