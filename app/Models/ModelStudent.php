<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStudent extends Model
{
  public function GetAllData()
  {
    // $db = \Config\Database::connect();
    // $builder = $db->table('estudiantes');
    $builder = $this->db->table('estudiantes');
    // $data = $this->db->query("SELECT * FROM estudiantes");
    // return $data->getResult();
    return $builder->get()->getResult();
  }
  public function GetDataWhere($id)
  {
    // $builder = $this->db->table('estudiantes');
    // $builder->where('estu_id',$id);
    // return $builder->get()->getResult();

    $data = $this->db->query("SELECT * FROM estudiantes WHERE estu_id=" . $id);
    return $data->getResult();
  }
  public function InsertData($values)
  {
    $builder = $this->db->table('estudiantes');
    $builder->insert($values);
  }
  public function UpdateData($values, $id = null)
  {
    $builder = $this->db->table('estudiantes');
    $builder->set($values);
    $builder->where('estu_id', $id);
    $builder->update();
    // $builder->update($values, array('estu_id' => $id));
    // $builder->insert($values);
  }
  public function DeleteDataById($id)
  {
    $builder = $this->db->table('estudiantes');
    $builder->where('estu_id', $id);
    $builder->delete();
    // $builder->delete(['estu_id' => $id]);
  }
}
