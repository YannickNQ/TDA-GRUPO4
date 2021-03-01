<?php

namespace App\Controllers;

use App\Models\ModelDocente;

class Docente extends BaseController
{
	public function index()
	{
		$model = new ModelDocente();
		$data = [
			'datos_doc' => $model->GetAllData(),
			'title' => "Docentes"
		];
		echo view('docentes/general',$data);
	}
	public function Editar($id)
	{
		$model = new ModelDocente();
		$data = [
			'datos_doc' => $model->GetDataWhere($id),
		];
		echo view('docentes/forms/FormEditar', $data);
	}
	public function Registrar()
	{
		echo view('docentes/general');
		echo view('docentes/forms/FormRegistrar');
	}
	public function Registrando()
	{

		// if(!isset($_POST['nombres']))
			// header("location: ".base_url()."/Docente");
		// else{
			$data = array(
				"nombres" => $this->load->post('nombres'),
				'apellidos'=> $this->load->post('apellidos'),
				'dni' => $this->load->post('dni'),
				'mail' => $this->load->post('mail'),
				'telef' => $this->load->post('telef'),
				'grado' => $this->load->post('grado'),
				'titulo' => $this->load->post('titulo'),
				'nacionalidad' => $this->load->post('nacionalidad'),
				'edad' => $this->load->post('edad'),
			);
			print_r($data);
			// $model = new ModelDocente();
		// }
	}
	public function Actualizar()
	{
	}

}
