<?php

namespace App\Controllers;
use App\Models\ModelUser;

class Login extends BaseController
{
	// function valid(){}
	public function Index()
	{
		if(isset($_SESSION['username']))
			return redirect()->to('/Docente');
		return view('login/login', ['message'=>session('message')]);
	}

	public function FormRegistrar()
	{
		echo view('login/registrar_user', ['message'=>session('message')]);
	}
	public function InsertData(){
		$userModel = new ModelUser($db);
		$request = \Config\Services::request();
		$data = [
			'username' => $request->getPostGet('username'),
			'password' => $request->getPostGet('password'),
		];
		if($userModel->insert($data) === false){
			$user['errores'] = $userModel->errors();
			return redirect()->to(base_url('/Registrar'))->with('message','error');
		}
		return redirect()->to(base_url())->with('message', 'success');
	}
	public function IniciandoSesion(){
		$request = \Config\Services::request();
		if($request->getPostGet('username') === null)
			return redirect()->to(base_url());
		$newdata = [
			'username' => $request->getPost('username'),
			'password' => $request->getPost('password'),
			// 'loged' => TRUE
		];
		$model = new ModelUser();
		if(!$model->ExistData($newdata))
			return redirect()->to(base_url())->with("mensaje","Ese usuario no existe");

		$this->session->set($newdata);
		return redirect()->to(base_url('/Docente'));
	}
	public function leerDatos()
	{
		if( $this->session->has('name') ){
			echo "\nname: ".$this->session->get('name');
			echo "\npassword: ".$this->session->get('password');
			echo "\nloged: ".$this->session->get('loged');
		}
		else {
			echo "No hay datos";
		}
	}
	public function cerrarSesion()
	{
		$this->session->destroy();
		return redirect()->to(base_url());
	}
	public function testd(){
		// $model = new ModelUser();
		// var_dump($model->ExistData(["username"=>"omms1", "password"=>"omms1"]));
		// $data = $model->GetDataWhere(["username"=>"omms1", "password"=>"omms1"]);
	}
}
