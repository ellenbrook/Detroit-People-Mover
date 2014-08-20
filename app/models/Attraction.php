<?php 

class Attraction extends \Eloquent {

	protected $table = 'attractions';

    protected $hidden = array('password', 'remember_token');

    protected $fillable = ['transit_stop_id' ,'name'];

    public $errors;

    public function transitStop()
    {
    	return $this->belongsTo("TransitStop");
    }

}