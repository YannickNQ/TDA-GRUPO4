<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStudent extends Model
{
  public function GetAllData()
  {
    $data = $this->db->query("SELECT * FROM estudiantes");
    return $data->getResult();
  }
  public function GetDataWhere($id)
  {
    $data = $this->db->query("SELECT * FROM estudiantes WHERE estu_id=" . $id);
    return $data->getResult();
  }
  public function UpdateData($values, $id = 0)
  {
    $builder = $this->db->table('estudiantes');
    $builder->set($values);
    $builder->where('estu_id', $id);
    $builder->update($values);
    // $builder->update($values, array('estu_id' => $id));
    // $builder->insert($values);
  }
  public function DeleteDataBy($id)
  {
    $builder = $this->db->table('estudiantes');
    $builder->where('estu_id', $id);
    $builder->delete();
    // $builder->delete(['estu_id' => $id]);
  }
}
