<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view("Header");
		echo view('Menu');
		echo view('Footer');
	}
}
