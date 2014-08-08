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
	return "Hello";
});

Route::resource('admin', 'AdminController');
Route::get('login', "SessionsController@create");
Route::get('logout', "SessionsController@destroy");
Route::resource('sessions', 'SessionsController');