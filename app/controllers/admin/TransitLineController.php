<?php

class TransitLineController extends \BaseController {
	
	protected $transitline;

	public function __construct(TransitLine $transitline)
    {
        $this->beforeFilter('role:Owner');
        $this->transitline = $transitline;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transitlines = $this->transitline->get();

		return View::make('transit.transitlines.index', ['transitlines' => $transitlines]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//get all user roles to populate the select menu
		$typesdata = $this->transitline->getTypesOfTransit();

		//loop through and assign a key value pair
		foreach ($typesdata as $key => $value)
		{
			$types[$value->id] = $value->name;
		}

		return View::make('transit.transitlines.create')->with('types', $types);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if (! $this->transitline->fill($input)->isValid()) 
		{ 
			return Redirect::back()->withInput()->withErrors($this->transitline->errors);
		}
		
		//if the transit input is valid then save it
		$this->transitline->save();

		//Assign the type of line to it
		//$this->transitline->assignTransit(Input::get('transit_id'));

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
		$transit = $this->transitline->findOrFail($id); //easier method to showing transit

		return View::make('transit.transitlines.show', ['transit' => $transit]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$transitline = $this->transitline->findOrFail($id);

		//get all user roles to populate the select menu
		$typesdata = $this->transitline->getTypesOfTransit();

		//loop through and assign a key value pair
		foreach ($typesdata as $key => $value)
		{
			$types[$value->id] = $value->name;
		}

        return View::make('transit.transitlines.edit', ['transitline' => $transitline, 'types' => $types]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$transit = $this->transitline->findOrFail($id);
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
