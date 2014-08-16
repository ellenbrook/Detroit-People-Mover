<?php

class Transit extends \Eloquent {

	protected $table = 'transit';

	protected $fillable = ['name'];

	public static $rules = [
            'name' => 'required'
    ];

    public $errors;


    //This transit line has many stops
    public function transitLine()
    {
        return $this->hasMany('TransitLine');
    }

    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if ($validation->passes()) return true;

        $this->errors = $validation->messages();
        return false;
    }
}