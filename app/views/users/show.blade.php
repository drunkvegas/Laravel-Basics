@extends('layouts.default')

@section('content')

	<!-- DISPLAYS MESSAGE.USERNAME FROM USER TABLE -->
	<h1>Hello, {{ $user->username }}</h1>

@stop