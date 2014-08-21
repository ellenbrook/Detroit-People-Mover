<?php

class TransitLineController extends \BaseController {
	
	protected $transitline;

	public function __construct()
    {
    	 $this->beforeFilter('role:Owner', array('except' => array('doLogin')));
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transitLines = TransitLine::get(); //get all transit lines

		//get list of all transits to populate table
		$types = Transit::lists('name', 'id');

		//loop through each transit and assign to an array

		return View::make('transit.transitlines.index', [
			'transitlines' => $transitLines,
			'types' => $types
			]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		//get list of all transits to populate table
		$types = Transit::lists('name', 'id');

		return View::make('transit.transitlines.create', ['types' => $types]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//set the validation rules and input
		$rules = TransitLine::validationRules();
		$input = Input::all();

		//create a new validator
		$validation = Validator::make($input, $rules);
		
		if ($validation->fails()) 
		{ 
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		$transitLine = new TransitLine;
		$transitLine->name = Input::get('name');
		$transitLine->transit_id = Input::get('transit_id');

		//if the transit input is valid then save it
		$transitLine->save();

        return Redirect::to('admin/transitline')->with('flash_message', 'Transit line added to the database!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$transitline = TransitLine::findOrFail($id); //easier method to showing transit

		return View::make('transit.transitlines.show', ['transitline' => $transitline]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$transitLine = TransitLine::find($id);
		//get list of all transits to populate table
		$types = $transitLine->transit->lists('name', 'id');

        return View::make('transit.transitlines.edit', ['transitline' => $transitLine, 'types' => $types]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$transit = TransitLine::findOrFail($id);

		$transit->fill(Input::all());
		$transit->save();

		return Redirect::to('admin/transitline')->with('flash_message', 'Transit line has been updated!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		TransitLine::destroy($id);
        return Redirect::to('admin/transitline')->with('flash_message', 'Transit line removed from the database!');
	}


}
