<?php

Route::get('/', function()
{
	//Returns Users != Sandra
	//$users = DB::table('users')->where('username', '!=', 'Sandra')->get(); 

	// Same as Above, but using Eloquent ORM
	//$users = User::where('username', '!=', 'Sandra')->get(); 

	//Selects * Users w Eloquent
	//$users = User::all(); 

	//Finds User 1 w Elo
	//$users = User::Find(1); 

	//Returns Above
	//return $users; 


	//CREATING / DELETING / UPDATING / RETURNING USERS//

	//Method 1: Creates New User in DB 
	// $users = new User;
	// $users->username = 'Rodrigo';
	// $users->password = Hash::make('1234');
	// $users->save();

	//Method 2: New User in DB w Array
	// User::create([
	// 	'username' => 'Kellie',
	// 	'password' => Hash::make('12345')
	// ]);
	
	//Updating User 2
	// $user = User::find(2);
	// $user->username = 'Sandra Trejo';
	// $user->save();

	//Deleting User 2
	// $user = User::find(2);
	// $user->delete();

	return User::orderBy('username', 'asc')->get(); //Return User in Alpha order
	//return User::orderby('username', 'asc')->take(2)->get(); //Returns First 2 in Alpha Order


});

//Getting User View
Route::get('users', function() 
{

	$users = User::all();

	//return View::make('users/index')->withUsers($users);
	return View::make('users.index', ['users' => $users]); //Passing Var in 2nd Arg
});

//Getting User Profile View
Route::get('users/{username}', function($username)
{
	$user = User::whereUsername($username)->first();

	return View::make('users.show', ['user' => $user]);
});















 