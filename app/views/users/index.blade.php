@extends('layouts.default')

@section('content')

	<h1>All Users</h1>

	@if ($users->count())

		<!-- Casts Usernames in an LI and LINKS_TO PROFILE -->
		@foreach ($users as $user)

			<li> {{ link_to("/users/{$user->username}", $user->username) }} </li>
			<!-- <li> {{ $user->username }} </li> -->
		
		@endforeach

	@else

		<p>No users, dawg.</p>

	@endif
	
@stop