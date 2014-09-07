<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	public $timestamps = false; //Allows DB Entries to be made sans timestamp
	
	protected $fillable = ['username', 'password']; //Tells Laravel that User/Pass are okay to be mass-assigned

	//Validation Rule Logic
	public static $rules = [
		'username' => 'required',
		'password' => 'required'
	];

	public static $errors;

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

	public static function isValid($data) 
	{
		$validation = Validator::make($data, static::$rules);

		if ($validation->passes())return true;

		static::$errors = $validation->errors();
		
		return false;

		}
}
