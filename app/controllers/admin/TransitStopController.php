<?php

class TransitStopController extends \BaseController {
	protected $transitstop;

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
		$transitstops = TransitStop::with('attraction', 'transitLine')->get();

		//get list of all transits to populate table
		$typesOfTransitLines = TransitLine::remember(10)->lists('name', 'id');

		return View::make('transit.transitstops.index', [
			'transitstops' => $transitstops, 
			'typesOfTransitLines' => $typesOfTransitLines
		]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    return "create";
		return View::make('transit.transitstops.create')->with('transit', $transit);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//set the validation rules and input
		$rules = TransitStop::validationRules();
		$input = Input::all();

		//create a new validator
		$validation = Validator::make($input, $rules);
		
		if ($validation->fails()) 
		{ 
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		$transitStop = new TransitStop;
		$transitStop->name = Input::get('name');

		//save transitStop
		$transitStop->save();

		$transitStop->assignTransitLine(Input::get('line_id'));
		return Redirect::to('admin/transitstop')->with('flash_message', 'Stop has been added to database.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$transitStop = TransitStop::findOrFail($id);
		return "showing ".$transitStop->name;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$transitStop = TransitStop::find($id);
		//get list of all attractions to populate table
		$types = TransitLine::lists('name', 'id');

        return View::make('transit.transitstops.edit', ['transitStop' => $transitStop, 'types' => $types]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = ['transit_line_id' => 'required', 'name' => 'required'];
		$input = Input::all();

		$transitStop = TransitStop::with('transitLine')->find($id);

		$currentTransitLine = $transitStop->transitLine();
		$currentTransitLineId = $currentTransitLine->first()->id;

		//create a new validator
		$validation = Validator::make($input, $rules);

		if ($validation->fails()) 
		{ 
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}
		//If the current line and the form line are different
		if($currentTransitLineId != $input['transit_line_id'])
		{
			//then do this but if it doesn't work redirect with errors
			if(!$currentTransitLine->updateExistingPivot($currentTransitLineId, [
				'transit_line_id' => $input['transit_line_id']
			], true))
			{
				return Redirect::back()->withInput()->withErrors("Something went wrong");
			}
		} 
		$transitStop->name = $input['name'];
		$transitStop->save();
		return Redirect::to('admin/transitstop')->with('flash_message', 'Transit stop has been updated!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		TransitStop::destroy($id);
		return Redirect::to('admin/transitstop')->with('flash_message', 'Item has been removed.');
	}


}
