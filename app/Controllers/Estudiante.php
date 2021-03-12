<?php

namespace App\Controllers;

use App\Models\ModelStudent;

class Estudiante extends BaseController
{
	public function Index()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$model = new ModelStudent();
		$data = [
			'datos_est' => $model->GetAllData(),
			'title' => "Estudiantes",
			'subtitle' => "SimpleTable",
			'content' => 'content_table',
			'registrarEst' => true,
		];
		return view('estudiantes/general', $data);
	}
	public function DataTable()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$data = [
			'title' => "Estudiantes",
			'subtitle' => "DataTable",
			'content' => "content_datatable",
			'registrarEst' => true,
		];
		return view('estudiantes/general', $data);
	}
	public function Select2()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$data = [
			'title' => "Estudiantes",
			'subtitle' => "Select2",
			'content' => "content_select2",
			'registrarEst' => true,
		];
		return view('estudiantes/general', $data);
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
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$data = [
			'title' => 'Estudiante',
			'content' => 'forms/FormRegistrar',
			'registrarEst' => false,
		];
		echo view('estudiantes/general', $data);
	}
	public function Registrar()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
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
		redirect()->to(base_url('/Estudiante'));
		// echo '<script> window.location.replace("' . base_url() . '/Estudiante' . '"); </script>';
	}
	public function Actualizar()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$request = \Config\Services::request();
		if (!$request->getPostGet('nombres')) {
			return redirect()->to(base_url('/Estudiante'));
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
		return redirect()->to(base_url('/Estudiante'));
		$this->Index();
	}
	public function Eliminar($id = null)
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		// $this->Index();
		$model = new ModelStudent();
		$model->DeleteDataById($id);
		// echo "Deleting estu_id = $id...";
		$this->Index();
	}
}
