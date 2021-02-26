<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		echo view('login/login');
	}

	public function Registrar()
	{
		echo view('login/Registrar');
	}
}
