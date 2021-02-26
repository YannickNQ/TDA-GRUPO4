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
}

?>