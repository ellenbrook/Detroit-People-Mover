<?php

class TransitStops extends \Eloquent {
	protected $fillable = ['name'];

	public function line() {
        return $this->belongsToMany('TransitLine', 'transit_lines_stop');
    }

    public function attractions() {
        return $this->hasMany('Attractions');
    }

}