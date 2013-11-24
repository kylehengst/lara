<?php

class Person extends Eloquent
{

	protected $guarded = array();
	public $timestamps = false;
	public static $rules = array(
		'fname' => 'trim|required',
		'lname' => 'required'
	);
	public static $messages = array(
		'fname.required' => 'Your First Name is required',
		'lname.required' => 'Your Last Name is required',
	);
	protected $table = 'test';

}
