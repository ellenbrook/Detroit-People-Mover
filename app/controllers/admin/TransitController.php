<?php

class TransitController extends \BaseController {
	protected $transit;

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

		$transit = new Transit;

		if (! $transit->fill($input)->isValid()) 
		{ 
			return Redirect::back()->withInput()->withErrors($transit->errors);
		}

		//if the transit input is valid then save it
		$transit->save();

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
		$transit = Transit::findOrFail($id);
		
		$transitLines = $transit->transitLine;

		$count = 0;
		$transitLineNameArray = [];
		foreach($transitLines as $transitLine) {
            $transitLineNameArray[$count] = $transitLine->name;
            $count++;
        }	

        $transitLineNames = implode(', ',$transitLineNameArray);
  		
        if(empty($transitLineNames)) {
        	$transitLineNames = "None";
        }

		return View::make('transit.show', [
			'transit' => $transit, 
			'transitLineNames' => $transitLineNames
		]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$transit = Transit::findOrFail($id);
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
		$transit = Transit::findOrFail($id);
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
