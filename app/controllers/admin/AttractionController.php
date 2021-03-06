<?php

class AttractionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /attraction
	 *
	 * @return Response
	 */
	public function index()
	{
		$attractions = Attraction::with('transitStop', 'transitStop.transitLine')->get();

		return View::make('attraction.index', ['attractions' => $attractions]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /attraction/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /attraction
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		dd($input);
	}

	/**
	 * Display the specified resource.
	 * GET /attraction/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$attraction = Attraction::with('transitStop', 'transitStop.transitLine')->find($id);
		return View::make('attraction.show', ['attraction' => $attraction]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /attraction/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /attraction/{id}
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
	 * DELETE /attraction/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}