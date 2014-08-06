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
	return View::make('hello');
});

Route::resource('admin', 'AdminController');