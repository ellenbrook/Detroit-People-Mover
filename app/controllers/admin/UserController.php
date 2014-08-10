<?php

class UserController extends \BaseController {

	protected $user;

	public function __construct(User $user)
    {
        $this->beforeFilter('role:owner');
        $this->user = $user;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->user->with('roles')->get();
		$role = "role";

		return View::make('user.index', ['users' => $users, 'role' => $role]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//get all user roles
		$roledata = $this->user->getRoles();

		//loop through and assign a key value pair
		foreach ($roledata as $key => $value)
		{
			$roles[$value->id] = $value->name;
		} 
		return View::make('user.create')->with('roles', $roles);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if (! $this->user->fill($input)->isValid()) 
		{ 
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}
		//if the user input is  valid then save it and redirect
		$this->user->save();

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
		//$user = $this->user->whereUsername($username)->first();
		// return View::make('user.show', ['user' => $user]);
		return "Showing ".$username;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->user->with('roles')->find($id);
		//get all user roles

		$roledata = $this->user->getRoles();

		//loop through and assign a key value pair
		foreach ($roledata as $key => $value)
		{
			$roles[$value->id] = $value->name;
		} 

        return View::make('user.edit', ['user' => $user, 'roles' => $roles]);
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
        return Redirect::to('/user')->with('flash_message', 'User added to the database!');
	}


}
