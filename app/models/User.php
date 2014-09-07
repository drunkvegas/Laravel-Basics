<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	//Allows DB Entries to be made sans timestamp
	public $timestamps = false; 
	
	//Tells Laravel that User/Pass are okay to be mass-assigned
	protected $fillable = ['username', 'password', 'email']; 

	//Validation Rule Logic
	public static $rules = [
		'username' => 'required',
		'password' => 'required'
	];

	public $errors;

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function isValid() 
	{
		$validation = Validator::make($this->attributes, static::$rules);

		if ($validation->passes())return true;

		$this->errors = $validation->messages();

		return false;

	}
}
