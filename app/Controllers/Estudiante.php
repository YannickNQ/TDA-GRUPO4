<?php

namespace App\Controllers;

use App\Models\ModelStudent;
use CodeIgniter\Controller;

class Estudiante extends BaseController
{
	public function index()
	{
		$model = new ModelStudent();
		$data = [
			'datos_est'=>$model->GetAllData(),
			'title'=>"Estudiantes"
		];
		echo view('estudiantes/general',$data);
	}
	public function Editar($id)
	{
		$model = new ModelStudent();
		$data = [
			'datos_estu' => $model->GetDataWhere($id),
		];
		echo view('estudiantes/forms/FormEditar', $data);
	}
	public function Registro(){
		echo view('estudiantes/forms/FormuEstu');
	}
	public function Crear(){
		
	}
	public function Actualizar(){
		echo "Enviado correctamente";
		echo $_POST['nombre'];
		
	}
	public function Eliminar(){

	}
	
}
