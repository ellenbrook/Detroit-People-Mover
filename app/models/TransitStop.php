<?php

class TransitStop extends \Eloquent {
	protected $fillable = ['name'];

	public function line() {
        return $this->belongsToMany('TransitLine', 'transit_lines_stop');
    }

    public function attractions() {
        return $this->hasMany('Attractions');
    }
    public function getTransitLines() {
        $transit_lines = DB::table('transit_lines')->get();
        return $transit_lines;
    }
}