<?php

class TransitStop extends \Eloquent {
    protected $table = 'transit_stops';

    protected $hidden = array('password', 'remember_token');

    protected $fillable = ['transit_id' ,'name'];

    public $errors;

    //This belongs to many transit lines
	public function transitLine() {
        return $this->belongsToMany('TransitLine')->withTimestamps();
    }
    //This has many attractions
    public function attraction() {
        return $this->hasMany('Attraction');
    }
    //get all transit lines
    public function getTransitLines() {
        $transit_lines = DB::table('TransitLine')->get();
        return $transit_lines;
    }
    //set transit line
    public function assignTransitLine($line_id) {
        return $this->transitLine()->attach($line_id);
    }

    public static function validationRules() 
    {
        return $rules = ['name' => 'required', 'line_id' => 'required']; 
    }
}