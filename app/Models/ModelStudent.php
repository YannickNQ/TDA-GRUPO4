<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStudent extends Model
{
  public function ListaAllNombres()
  {
    $data = $this->db->query("SELECT `estu_nombres` FROM estudiantes");
    return $data->getResult();
  }
  public function GetAllData()
  {
    $data = $this->db->query("SELECT * FROM estudiantes");
    return $data->getResult();
  }
}
