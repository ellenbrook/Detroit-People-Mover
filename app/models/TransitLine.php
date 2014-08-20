<?php

class TransitLine extends \Eloquent {

	protected $table = 'transit_lines';

	protected $fillable = ['transit_id','name'];

	public static $rules = [
            'name' => 'required'
    ];

    public $errors;

    //Set relationship between transit line and transit
    public function transit()
    {
        return $this->belongsTo('Transit');
    }

    public function transitStops()
    {
        return $this->belongsToMany('TransitStop');
    }
    
    //Assign transit type to newly created line
    public function assignTransit($id)
    {
        return $this->transit()->attach($id);
    }

    //select all of the lines
    public function getTypesOfTransit() {
        $types = DB::table('transit')->get();
        return $types;
    }

    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if ($validation->passes()) return true;

        $this->errors = $validation->messages();
        return false;
    }
}