<?php
/*
 * Protect against cross-site scripts for the following methods
 */
Route::when('*', 'csrf', ['post', 'put', 'patch']);

/*
 * Index Route
 */
Route::get('/', ['as' => 'home', function()
{
	return View::make('hello');
}]);

Route::get('profile', function() { return Auth::user()->email; })->before('auth');
Route::resource('admin', 'AdminController');
Route::get('login', "SessionsController@create");
Route::get('logout', "SessionsController@destroy");
Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);