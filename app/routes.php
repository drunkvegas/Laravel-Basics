<?php

Route::get('/', function()
{
	$users = DB::table('users')->where('username', '!=', 'Sandra')->get();

	return $users;
});
