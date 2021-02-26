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

		$data = ['datos_doc' => $model->GetAllData()];
		echo view('docentes/general');
		echo view('docentes/content_table', $data);
	}
	public function Editar($id)
	{
		echo view('docentes/forms/FormEditar', array('myid' => $id));
	}
	public function Registrar()
	{
		echo view('docentes/general');
		echo view('docentes/forms/FormRegistrar');
	}
	public function Register(){
		$data = array(
			$this->load->post('nombres'),
			$this->load->post('apellidos'),
			$this->load->post('dni'),
			$this->load->post('mail'),
			$this->load->post('telef'),
			$this->load->post('grado'),
			$this->load->post('titulo'),
			$this->load->post('nacionalidad'),
			$this->load->post('edad'),
		);
		$model = new ModelDocente();
	}
}
