<?php

class AdminController extends \BaseController {
	public function __construct()
    {
        $this->beforeFilter('role:owner', array('except' => array('doLogin')));
    }
	/**
	 * Display login for admin
	 *
	 * @return Response
	 */
	public function doLogin()
	{
		if (Auth::check())
		{
		    return Redirect::to('admin'); //if already logged in redirect to dash
		}
		return View::make('admin.login');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.index');
	}
}
