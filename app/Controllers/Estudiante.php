<?php

namespace App\Controllers;

use App\Models\ModelStudent;
use CodeIgniter\Controller;

class Estudiante extends BaseController
{
	public function index()
	{
		$model = new ModelStudent();
		$data = ['datos_est'=>$model->GetAllData()];
		echo view('estudiantes/general');
		echo view('estudiantes/content_table', $data);
	}
	public function Registro(){
		echo view('estudiantes/forms/FormuEstu');
	}
	public function Crear(){
		
	}
	public function Actualizar(){

	}
	public function Eliminar(){

	}
	
}
