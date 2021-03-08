<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
  protected $table      = 'usuarios';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = true;

  protected $allowedFields = ['username', 'password'];
  // protected $allowedFields = ['email'];

  // protected $useTimestamps = false;
  // protected $createdField  = 'created_at';
  // protected $updatedField  = 'updated_at';
  // protected $deletedField  = 'deleted_at';

  protected $validationRules    = [
    'username' => 'is_unique[usuarios.username]|alpha_numeric|min_length[4]',
    // 'name' => 'required|alpha_numeric_space|min_length[4]',
    'password' => 'required'
    // 'email' => 'required|valid_email|is_unique[users.email]'
  ];
  protected $validationMessages = [
    'name' => [
      'is_unique' => 'Este nombre ya esta siendo usado por otro usuario',
      'alpha_numeric' => 'El nombre solo debe tener caracteres alfanumericos',
      'min_length' => 'El nombre debe de tener como minimo 4 caracteres'
    ],
    'password' => [
      'required' => 'Este campo no puede estar vacio'
    ]
  ];
  protected $skipValidation     = false;
  public function GetAllData()
  {
    // $db = \Config\Database::connect();
    // $builder = $db->table('usuarios');
    $builder = $this->db->table('usuarios');
    // $data = $this->db->query("SELECT * FROM usuarios");
    // return $data->getResult();
    return $builder->get()->getResult();
  }
  public function GetDataWhere($arr)
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('usuarios');
    $data = $builder->where($arr)->get()->getResult();
    if(count($data) <= 0){
      return null; 
    }
    else{
      return (array)($data);

    }
  }
  public function ExistData($arr)
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('usuarios');
    $data = $builder->where($arr)->get()->getResult();
    if(count($data) <= 0){
      return false; 
    }
    else{
      return true;

    }
  }
  public function InsertarRegistro($arr){
    $db      = \Config\Database::connect();
    $builder = $db->table('usuarios');
    $builder->insert($arr);
  }
}