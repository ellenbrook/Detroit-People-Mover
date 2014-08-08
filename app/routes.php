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
	$member = Role::create(['name' => 'member']);
	$admin = Role::create(['name' => 'administrator']);
	$owner = Role::create(['name' => 'owner']);

	User::first()->roles()->attach(3);

	return User::first();
}]);

Route::get('profile', function() { return Auth::user()->email; })->before('auth');
Route::resource('admin', 'AdminController');
Route::get('login', "SessionsController@create");
Route::get('logout', "SessionsController@destroy");
Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);