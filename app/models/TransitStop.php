<?php

class TransitStop extends \Eloquent {
    protected $table = 'transit_stops';

    protected $hidden = array('password', 'remember_token');

    protected $fillable = ['transit_id' ,'name'];

    public $errors;

    //This belongs to many transit lines
	public function line() {
        return $this->belongsToMany('TransitLine');
    }
    //This has many attractions
    public function attractions() {
        return $this->hasMany('Attractions');
    }
    //get all transit lines
    public function getTransitLines() {
        $transit_lines = DB::table('TransitLine')->get();
        return $transit_lines;
    }
    //set transit line
    public function assignTransitLine($line_id) {
        return $this->line()->attach($line_id)->withTimeStamps();
    }
}