<?php
/*
 * Protect against cross-site scripts for the following methods
 */
Route::when('*', 'csrf', ['post', 'put', 'patch']);

/*
 * Index Route
 */
Route::get('/', function()
{
	if(DB::connection()->getDatabaseName())
	{
   			return "conncted sucessfully to database ".DB::connection()->getDatabaseName();
	}
});

Route::resource('admin', 'AdminController');
Route::get('login', "SessionsController@create");
Route::get('logout', "SessionsController@destroy");
Route::resource('sessions', 'SessionsController');