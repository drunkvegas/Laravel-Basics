<?php

class UsersController extends \BaseController {

	public function index()
	{

		$users = User::all();

		//return View::make('users/index')->withUsers($users);
		return View::make('users.index', ['users' => $users]); //Passing Var in 2nd Arg
	}

	public function show($username) //Pass wildcard for var, if not error
	{
		$user = User::whereUsername($username)->first();

		return View::make('users.show', ['user' => $user]);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		$user = new User;
		// Inserts into DB what was inputted into said fields
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::route('users.index');


	}

}


