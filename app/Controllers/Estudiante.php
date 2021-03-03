<?php

namespace App\Controllers;

use App\Models\ModelStudent;

class Estudiante extends BaseController
{
	public function Index()
	{
		$model = new ModelStudent();
		$data = [
			'datos_est' => $model->GetAllData(),
			'title' => "Estudiantes",
			'content' => 'content_table',
			'registrarEst' => true,
		];
		echo view('estudiantes/general', $data);
	}
	public function Editar($id)
	{
		$model = new ModelStudent();
		$data = [
			'datos_estu' => $model->GetDataWhere($id),
		];
		echo view('estudiantes/forms/FormEditar', $data);
	}
	public function FormRegistrar()
	{
		$data = [
			'title' => 'Registrar Datos',
			'content' => 'forms/FormRegistrar',
			'registrarEst' => false,
		];
		echo view('estudiantes/general', $data);
	}
	public function Registrar()
	{
		$request = \Config\Services::request();
		if (!$request->getPost('nombres')) {
			echo "<h3>REDIRECCIONANDO...</h3>";
			echo '<script> window.location.replace("' . base_url() . '/Estudiante' . '"); </script>';
		}
		$data = array(
			'estu_nombres' => $request->getPost('nombres'),
			'estu_apellidos' => $request->getPost('apellidos'),
			'estu_edad' => $request->getPost('edad'),
			'estu_correo' => $request->getPost('correo'),
			'estu_carrera' => $request->getPost('carrera'),
			'estu_codigo' => $request->getPost('codigo'),
			'estu_telf' => $request->getPost('telefono'),
			'estu_ciclo' => $request->getPost('ciclo'),
			'estu_nac' => $request->getPost('nacimiento'),
		);
		$model = new ModelStudent();
		$model->InsertData($data);
		echo '<script> window.location.replace("' . base_url() . '/Estudiante' . '"); </script>';
	}
	public function Actualizar()
	{
		$request = \Config\Services::request();
		if (!$request->getPost('nombres')) {
			echo "<h3>REDIRECCIONANDO...</h3>";
			echo '<script> window.location.replace("' . base_url() . '/Estudiante' . '"); </script>';
		}
		$data = array(
			'estu_nombres' => $request->getPost('nombres'),
			'estu_apellidos' => $request->getPost('apellidos'),
			'estu_edad' => $request->getPost('edad'),
			'estu_correo' => $request->getPost('correo'),
			'estu_carrera' => $request->getPost('carrera'),
			'estu_codigo' => $request->getPost('codigo'),
			'estu_telf' => $request->getPost('telefono'),
			'estu_ciclo' => $request->getPost('ciclo'),
			'estu_nac' => $request->getPost('nacimiento'),
		);
		$model = new ModelStudent();
		$model->UpdateData($data, $request->getPost('id'));
		$this->Index();
	}
	public function Eliminar($id = null)
	{
		// $this->Index();
		$model = new ModelStudent();
		$model->DeleteDataById($id);
		// echo "Deleting estu_id = $id...";
		$this->Index();
	}
}
