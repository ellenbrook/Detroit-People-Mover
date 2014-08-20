<?php

class TransitController extends \BaseController {
	protected $transit;

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
		$transits = Transit::with('transitLine')->get();

		return View::make('transit.index', ['transit' => $transits]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('transit.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		if (! $this->transit->fill($input)->isValid()) 
		{ 
			return Redirect::back()->withInput()->withErrors($this->transit->errors);
		}

		//if the transit input is valid then save it
		$this->transit->save();

        return Redirect::to('admin/transit')->with('flash_message', 'Transit line added to the database!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$transitline = Transit::with('TransitLine')->findOrFail($id);
		//select the transit line and pull in the information (find or fail?)
		$count = TransitLine::where('transit_id', '=', $id)->count();

		return View::make('transit.show', ['transitline' => $transitline, 'count' => $count]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$transit = $this->transit->findOrFail($id);
        return View::make('transit.edit', ['transit' => $transit]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$transit = $this->transit->findOrFail($id);
		$transit->fill(Input::all());
		$transit->save();

		return Redirect::to('admin/transit')->with('flash_message', 'Transit line has been updated!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Transit::destroy($id);
        return Redirect::to('admin/transit')->with('flash_message', 'Transit line removed from the database!');
	}


}
