<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Let's Learn // Users Index</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>All Users</h1>

	<!-- <h2> {{  $users }} </h2> Inserted Blade Var -->

	<!-- Casts Usernames in an LI and LINKS_TO PROFILE -->
	@foreach ($users as $user)

		<li> {{ link_to("/users/{$user->username}", $user->username) }} </li>
		<!-- <li> {{ $user->username }} </li> -->
	
	@endforeach
	
</body>
</html