<?php

namespace App\Controllers;

use App\Models\ModelDocente;
use CodeIgniter\Config\View;

class Docente extends BaseController
{
	function __construct(){
	}
	public function Index()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$model = new ModelDocente();
		$data = [
			'datos_doc' => $model->GetAllData(),
			'title' => "Docentes",
			'subtitle' => "SimpleTable",
			'content' => "content_table",
			'registrarDoc' => true,
		];
		echo view('docentes/general', $data);
	}
	public function DataTable()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$model = new ModelDocente();
		$data = [
			'dataTab_doc' => $model->GetAllData(),
			'title' => "Docentes",
			'subtitle' => "DataTable",
			'content' => "content_datatable",
			'registrarDoc' => true,
		];
		echo view('docentes/general', $data);
	}
	public function Select2()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$data = [
			'title' => "Docentes",
			'subtitle' => "Select2",
			'content' => "content_select2",
			'registrarDoc' => true,
		];
		echo view('docentes/general', $data);
	}
	public function FormRegistrar()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$data = [
			'title' => "Docente",
			'content' => "forms/FormRegistrar",
			'registrarDoc' => false,
		];
		echo view('docentes/general', $data);
		// redirect('mainController/Student_Login/');
		// echo view('docentes/forms/FormRegistrar');
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
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$request = \Config\Services::request();
		if (!$request->getPost('nombres')) {
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
		// redirect('/Docente/Index');
		echo '<script> window.location.replace("' . base_url() . '/Docente' . '"); </script>';
	}
	public function Actualizar()
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$request = \Config\Services::request();
		if (!$request->getPost('nombres')) {
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
		$model = new ModelDocente();
		$model->UpdateData($data, $request->getPost('id'));
		$this->Index();
		// redirect('Docente/Index/');
	}
	public function Eliminar($id = null)
	{
		if(!isset($_SESSION['username']))
			return redirect()->to(base_url());
		$model = new ModelDocente();
		$model->DeleteDataById($id);
		$this->Index();
	}
}