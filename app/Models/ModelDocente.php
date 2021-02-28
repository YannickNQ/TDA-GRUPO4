<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDocente extends Model
{
  public function GetAllData()
  {
    $data = $this->db->query("SELECT * FROM docentes");
    return $data->getResult();
  }
  public function GetDataWhere($id)
  {
    $data = $this->db->query("SELECT * FROM docentes WHERE doce_id=".$id);
    return $data->getResult();
  }
  public function SetData($data)
  {
    // $this->db->query(
    //   "INSERT INTO `docentes`
    //   ()"
    // );
  }
}
