<?php

class TransitStopController extends \BaseController {
	protected $transitstop;

	public function __construct(TransitStop $transitstop)
    {
        $this->beforeFilter('role:Owner');
        $this->transitstop = $transitstop;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transitstops = $this->transitstop->get(); //Get all stops

		//perform query to get all lines

		//loop through and assign to array

		return View::make('transit.transitstops.index', ['transitstops' => $transitstops]);
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
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "showing 1";
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "editing 1";
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
		return "destroying 1";
	}


}
