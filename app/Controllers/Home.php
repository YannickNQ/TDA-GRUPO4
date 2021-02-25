<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view("Header");
		echo view('Login');
		echo view('Footer');
	}
}
