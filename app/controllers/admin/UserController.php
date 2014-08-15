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

		return View::make('user.index', ['users' => $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//get all user roles to populate the select menu
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

		//unset the password confirm
		unset($this->user->password_confirmation);
		//if the user input is  valid then save it and assign associated role
		$this->user->save();
		$this->user->assignRole(Input::get('role'));

        return Redirect::to('/user')->with('flash_message', 'User added to the database!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = $this->user->with('roles')->findOrFail($id); //easier method to showing user

		return View::make('user.show', ['user' => $user]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->user->with('roles')->findOrFail($id);
		//get all user roles
		$roledata = $this->user->getRoles();

		//loop through and assign a key value pair
		foreach ($roledata as $key => $value)
		{
			$roles[$value->id] = $value->name;
		} 

        return View::make('user.edit', ['user' => $user, 'roles' => $roles, 'currentRole' => $current = $user->roles->first()]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = $this->user->findOrFail($id);
		$user->removeRole($user->roles->first()->id); //remove existing role
		$user->fill(Input::except('password'));
		$user->assignRole(Input::get('role'));

		$user->save();

		return Redirect::to('/user')->with('flash_message', 'User has been updated!');
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
