<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function manga()
	{
		return view('Manga');
	}
	public function novelaLigera()
	{
		return view('novelaLigera');
	}
	public function novelaWeb()
	{
		return view('novelaWeb');
	}
	public function fichaManga()
	{
		return view('fichaManga');
	}
	public function capManga()
	{
		return view('capManga');
	}
}
