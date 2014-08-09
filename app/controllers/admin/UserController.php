<?php

class UserController extends \BaseController {
	public function __construct()
    {
        $this->beforeFilter('role:owner');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('user.index', ['users' => $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//get all user roles
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//$user = new User;
 
        // $user->first_name = Input::get('first_name');
        // $user->last_name  = Input::get('last_name');
        // $user->username   = Input::get('username');
        // $user->email      = Input::get('email');
        // $user->password   = Hash::make(Input::get('password'));
 
        // $user->save();
 
        // return Redirect::to('/user');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
 		return $user;
        //return View::make('user.edit', [ 'user' => $user ]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
 		return "Destroying";
        //return Redirect::to('/user');
	}


}
