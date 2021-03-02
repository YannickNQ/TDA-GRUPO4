<?php

namespace App\Controllers;

use App\Models\ModelDocente;
use CodeIgniter\Config\View;

class Docente extends BaseController
{
	public function Index()
	{
		$model = new ModelDocente();
		$data = [
			'datos_doc' => $model->GetAllData(),
			'title' => "Docentes",
			'content' => "content_table",
			'registrarDoc' => true,
		];
		echo view('docentes/general', $data);
	}
	public function Editar($id)
	{
		$model = new ModelDocente();
		$data = [
			'datos_doc' => $model->GetDataWhere($id),
		];
		echo view('docentes/forms/FormEditar', $data);
	}
	public function FormRegistrar()
	{
		$model = new ModelDocente();
		$data = [
			'title' => "Registrar Datos",
			'content' => "forms/FormRegistrar",
			'registrarDoc' => false,
		];
		echo view('docentes/general', $data);
		// echo view('docentes/forms/FormRegistrar');
	}
	public function Registrar()
	{
		$request = \Config\Services::request();
		if(!$request->getPost('nombres')){
			echo "<h3>REDIRECCIONANDO...</h3>";
			echo '<script> window.location.replace("' . base_url() . '/Docente' . '"); </script>';
		}
		$data = array(
			"doce_nombre" => $request->getPost('nombres'),
			'doce_apellidos' => $request->getPost('apellidos'),
			'doce_dni' => $request->getPost('dni'),
			'doce_correo' => $request->getPost('correo'),
			'doce_telf' => $request->getPost('telef'),
			'doce_grado' => $request->getPost('grado'),
			'doce_titulo' => $request->getPost('titulo'),
			'doce_nacion' => $request->getPost('nacionalidad'),
			'doce_edad' => $request->getPost('edad'),
		);
		// print_r($data);
		$model = new ModelDocente();
		$model->InsertData($data);
		echo '<script> window.location.replace("' . base_url() . '/Docente' . '"); </script>';
	}
	public function Actualizar()
	{
		$request = \Config\Services::request();
		if(!$request->getPost('nombres')){
			echo "<h3>REDIRECCIONANDO...</h3>";
			echo '<script> window.location.replace("' . base_url() . '/Docente' . '"); </script>';
		}
		$data = array(
			"doce_nombre" => $request->getPost('nombres'),
			'doce_apellidos' => $request->getPost('apellidos'),
			'doce_dni' => $request->getPost('dni'),
			'doce_correo' => $request->getPost('mail'),
			'doce_telf' => $request->getPost('telef'),
			'doce_grado' => $request->getPost('grado'),
			'doce_titulo' => $request->getPost('titulo'),
			'doce_nacion' => $request->getPost('nacionalidad'),
			'doce_edad' => $request->getPost('edad'),
		);
		$model = new ModelDocente();
		$model->UpdateData($data, $request->getPost('id'));
		$this->Index();
	}
	public function Eliminar($id = null){
		$model = new ModelDocente();
		$model->DeleteDataById($id);
		$this->Index();
	}
}
