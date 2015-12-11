<?php

class List extends Eloquent {

	public function user() 
	{
		return $this->belongsTo('User');
	}

	public static function myLists($userid) 
	{
		return static::where('user_id', '=', $userid)->order_by('id', 'DESC')->paginate(5);
	}



}