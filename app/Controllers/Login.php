<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function Index()
	{
		echo view('login/login');
	}

	public function Registrar()
	{
		echo view('login/registrar_user');
	}
}
