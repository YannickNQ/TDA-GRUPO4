<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDocente extends Model
{
  protected $table      = 'users';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = ['username', 'password'];
  // protected $allowedFields = ['email'];

  protected $useTimestamps = false;
  // protected $createdField  = 'created_at';
  // protected $updatedField  = 'updated_at';
  // protected $deletedField  = 'deleted_at';

  protected $validationRules    = [
    'name' => 'alpha_numeric_space|min_length[4]',
    // 'name' => 'required|alpha_numeric_space|min_length[4]',
    'email' => 'valid_email|is_unique[users.email]'
    // 'email' => 'required|valid_email|is_unique[users.email]'
  ];
  protected $validationMessages = [
    'name' => [
      'alpha_numeric_space' => 'El nombre solo debe tener caracteres alfanumericos',
      'min_length' => 'El nombre debe de tener como minimo 4 caracteres'
    ],
    'email' => [
      'is_unique' => 'Ese email ya esta siendo usado por otro usuario',
      'valid_email' => 'Debe escribir una direccion de correo valida'
    ]
  ];
  protected $skipValidation     = false;

  // protected $beforeInsert = ['AgregaAlgoName'];
  // protected $beforeUpdate = ['AgregaAlgoName'];
  protected function AgregaAlgoName(array $data)
  {
    $data['data']['name'] = $data['data']['name'] . " algo";
    return $data;
  }
  public function GetAllData()
  {
    // $db = \Config\Database::connect();
    // $builder = $db->table('estudiantes');
    $builder = $this->db->table('docentes');
    // $data = $this->db->query("SELECT * FROM docentes");
    // return $data->getResult();
    return $builder->get()->getResult();
  }
  public function GetDataWhere($id)
  {
    // $builder = $this->db->table('docentes');
    // $builder->where('doce_id',$id);
    // return $builder->get()->getResult();

    $data = $this->db->query("SELECT * FROM docentes WHERE doce_id=" . $id);
    return $data->getResult();
  }
  public function InsertData($values)
  {
    // $db      = \Config\Database::connect();
    $builder = $this->db->table('docentes');
    $builder->insert($values);
  }
  public function UpdateData($values, $id = null)
  {
    // if ($id != null) {
    $builder = $this->db->table('docentes');
    $builder->set($values);
    $builder->where('doce_id', $id);
    return $builder->update();
    // $builder->update($values, array('doce_id' => $id));
    // $builder->insert($values);
    // }
  }
  public function DeleteDataById($id)
  {
    $builder = $this->db->table('docentes');
    $builder->where('doce_id', $id);
    $builder->delete();
    // $builder->delete(['doce_id' => $id]);
  }
  function make_query()
  {
    $db      = \Config\Database::connect();
    $builder = $db->table('docentes');
    $builder->select(["doce_id", "doce_nombre", "doce_apellidos", "doce_correo"]);
    if (isset($_POST["search"]["value"])) {
      $builder->like("doce_nombre", $_POST["search"]["value"]);
      $builder->orLike("doce_apellidos", $_POST["search"]["value"]);
    }
    if(isset($_POST["order"])){
      $builder->orderBy(array(null,"doce_nombre","doce_apellidos",null,null)[$_POST['order'][0]['column']], $_POST['order']['0']['dir']);
    } else {
      $builder->orderBy("doce_id", "DESC");
    }
  }
  public function make_datatables(){
    $builder = $this->db->table('docentes');
    $this->make_query();
    if($_POST['length'] != -1){
      $builder->limit($_POST["length"], $_POST["Start"]);
    }
    $query = $builder->get();
    return $query->getResult();
  }
  public function get_filtered_data(){
    $builder = $this->db->table('docentes');
    $this->make_query();
    // $query = $builder->get();
    return $builder->countAllResults(false);
  }
  function get_all_data()
  {
    $builder = $this->db->table('docentes');
    $query = $builder->get();
    return $builder->countAllResults(false);
  }
}
