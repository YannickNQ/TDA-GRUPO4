<?php

namespace App\Controllers;

use App\Models\ModelStudent;
use CodeIgniter\Controller;

class Estudiante extends BaseController
{
	public function index()
	{
		$model = new ModelStudent();
		// echo "<pre>";
		// print_r($model->GetAllData());
		// echo "</pre>";
		// $data = ['numero'=>3];
		// echo view('content_table',$data);

		$data = ['datos_est'=>$model->GetAllData()];
		echo view('estudiantes/general');
		echo view('estudiantes/content_table', $data);
	}
	public function registro(){
		echo view('estudiantes/forms/FormuEstu');
	}
	
}
