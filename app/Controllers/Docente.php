<?php

namespace App\Controllers;

use App\Models\ModelDocente;

class Docente extends BaseController
{
	public function index()
	{
		$model = new ModelDocente();
		// echo "<pre>";
		// print_r($model->GetAllData());
		// echo "</pre>";
		// $data = ['numero'=>3];
		// echo view('content_table',$data);

		$data = ['datos_doc'=>$model->GetAllData()];
		echo view('docentes/general');
		echo view('docentes/content_table', $data);
	}
    
}
