<?php

class TransitStopController extends \BaseController {
	protected $transitstop;

	public function __construct()
    {
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transitstops = TransitStop::get();
		//get all user transit lines to populate the select menu
		$typesdata = TransitLine::get();

		//loop through and assign a key value pair
		foreach ($typesdata as $key => $value)
		{
			$types[$value->id] = $value->name;
		}

		return View::make('transit.transitstops.index', ['transitstops' => $transitstops, 'types' => $types]);
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
		$input = Input::all();

		$transitStop = new TransitStop;
		$transitStop->name = $input['name'];

		//save transitStop
		$transitStop->save();

		$transitStop->assignTransitLine($input['line_id']);
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
		$transitStop = TransitStop::findOrFail($id);
		return "editing ".$transitStop->name;;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$transitStop = TransitStop::findOrFail($id);
		return "updating ".$transitStop->name;;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$transitStop = TransitStop::findOrFail($id);
		return "destroying ".$transitStop->name;;
	}


}
