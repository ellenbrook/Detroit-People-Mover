<?php

class Transit extends \Eloquent {

	protected $table = 'transit';

	protected $fillable = ['name'];

	public static $rules = [
            'name' => 'required'
    ];

    public $errors;

    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if ($validation->passes()) return true;

        $this->errors = $validation->messages();
        return false;
    }

    //This transit line has many stops
    public function stops()
    {
        return $this->hasMany('Stops')->withTimestamps();
    }

    //Check to see if a specific stop belongs to this transit line
    public function hasStop($name)
    {
        foreach ($this->stops as $stop)
        {
            if ($stop->name == $name) return true;
        }

        return false;
    }

    //Assign a stop to this transit line
    public function assignStop($name)
    {
        return $this->stops()->attach($name);
    }
    
    //remove the stop from the transit line
    public function removeStop($name)
    {
        return $this->stops()->detach($name);
    }
}