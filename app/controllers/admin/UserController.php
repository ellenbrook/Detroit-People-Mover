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
		$validation = Validator::make(Input::all(), ['username' => 'required', 'email' => 'required', 'password' => 'required']);

		if ($validation->fails()) { 
			
		}

		$user = new User;

		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		$user->save();

        return Redirect::to('/user')->with('flash_message', 'User added to the database!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		return "Showing ".$username;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		$user = User::find($username);
 		return "Editing ".$username;
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
