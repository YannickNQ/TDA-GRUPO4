<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDocente extends Model
{
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
}
