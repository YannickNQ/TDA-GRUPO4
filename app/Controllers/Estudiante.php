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
			'datos_est' => $model->GetAllData(),
			'title' => "Estudiantes"
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
		$model = new ModelStudent();
		echo view('estudiantes/forms/FormRegistrar');
	}
	public function Registrando()
	{
		if (!isset($_POST['nombres'])) {
			echo "<h3>REDIRECCIONANDO...</h3>";
			echo '<script> window.location.replace("' . base_url() . '/Estudiante' . '"); </script>';
		}
	}
	public function Actualizar()
	{
		if (!isset($_POST['nombres'])) {
			echo "<h3>REDIRECCIONANDO...</h3>";
			echo '<script> window.location.replace("' . base_url() . '/Estudiante' . '"); </script>';
		}
		$model = new ModelStudent();
		$data = array(
			'estu_nombres' => $_POST['nombres'],
			'estu_apellidos' => $_POST['apellidos'],
			'estu_edad' => $_POST['edad'],
			'estu_correo' => $_POST['correo'],
			'estu_carrera' => $_POST['carrera'],
			'estu_codigo' => $_POST['codigo'],
			'estu_telf' => $_POST['telefono'],
			'estu_ciclo' => $_POST['ciclo'],
		);
		$model->UpdateData($data, $_POST['id']);
		$this->index();
	}
	public function EliminarPorId($id)
	{
		// $this->index();
		$model = new ModelStudent();
		echo $model->DeleteData($id);
		// echo "Deleting estu_id = $id...";
		$this->index();
	}
}
