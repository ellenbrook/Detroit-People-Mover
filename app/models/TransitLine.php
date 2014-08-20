<?php

class TransitLine extends \Eloquent {

	protected $table = 'transit_lines';

	protected $fillable = ['transit_id','name'];


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
    public static function getTypesOfTransit() {
        $types = DB::table('transit')->get();
        return $types;
    }

    public static function validationRules()
    {
        return $rules = ['name' => 'required', 'transit_id' => 'required'];   
    }
}