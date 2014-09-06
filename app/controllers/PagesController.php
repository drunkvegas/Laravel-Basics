<?php

class PagesController extends BaseController {

	public function home() //Route Method Name
	{
		$name = 'Ayahusca'; //Adding Name Variable

		return View::make('hello')->with('name', $name); //Passing Name Var
	}

	public function about()
	{
		$aboutMe = 'Im just a simple substance.'; //Adding About Var

		return View::make('about')->with('aboutMe', $aboutMe); //Making View and Pass About Var
	}

}
