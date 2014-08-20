<?php

Event::listen('illuminate.query', function($query){
	var_dump($query);
});
/****************************
 * Protect against cross-site 
 * scripts for the 
 * following methods
 *****************************/
Route::when('*', 'csrf', ['post', 'put', 'patch']);

/****************************
 * Index Route
 *****************************/
Route::get('/', ['as' => 'home', function()
{
	User::first()->roles()->attach(3);
	return View::make('hello');
}]);

Route::group(['prefix' => 'admin'], function() {
	/****************************
	**       User Routes       **
	*****************************/
	Route::resource('user', 'UserController');

	/****************************
	**          Transit        **
	*****************************/
	Route::resource('transit', 'TransitController');

	/****************************
	**      Transit Line     **
	*****************************/
	Route::resource('transitline', 'TransitLineController');

	/****************************
	**      Transit Stops     **
	*****************************/
	Route::resource('transitstop', 'TransitStopController');
});

/****************************
**  Administrative Routes  **
*****************************/
//Check user logged in & has an owner role before allowing them
Route::get('admin', 'AdminController@index'); 
//Route Login and Logout to the session controller
Route::get('/admin/login', "AdminController@doLogin");
Route::get('/admin/logout', "SessionController@destroy");


/****************************
**     Session Routes      **
*****************************/
Route::get('login', "SessionsController@create");
Route::get('logout', "SessionsController@destroy");
Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);