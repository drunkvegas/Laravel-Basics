<?php

Route::get('/', function()
{
	//$users = DB::table('users')->where('username', '!=', 'Sandra')->get(); //Retunrs Users != Sandra
	//$users = User::where('username', '!=', 'Sandra')->get(); // Same as Above, but using Eloquent ORM
	//$users = User::all(); //Selects * Users w Eloquent
	//$users = User::Find(1); //Finds User 1 w Elo
	//return $users; //Retunrs Above

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

	//return User::orderBy('username', 'asc')->get(); //Return User in Alpha order
	//return User::orderby('username', 'asc')->take(2)->get(); //Returns First 2 in Alpha Order







});
 