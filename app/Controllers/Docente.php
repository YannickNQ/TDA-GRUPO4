<?php

namespace App\Controllers;

class Docente extends BaseController
{
	public function index()
	{
		echo view('Header');
		echo view('Menu');
	}
    
}
