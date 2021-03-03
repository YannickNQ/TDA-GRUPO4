<?php

namespace App\Controllers;

class Usuario extends BaseController
{
	public function Index()
	{
		$data = [
			'title' => "Usuarios",
			'subtitle' => "",
			'content' => "content_table",
			// 'registrarEst' => true,
		];
		echo view('usuarios/general', $data);
	}

	public function Profile(){
    
  }
}
