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
  public function UpdateData($id = 0, $values)
  {
    $data = $this->db->query(
      "UPDATE `estudiantes` SET " .
      "`estu_nombres`=" . $values['nombres'] . "," .
      "`estu_apellidos`=" . $values['apellidos'] . "," .
      "`estu_edad`=" . $values['edad'] . "," .
      "`estu_correo`=" . $values['correo'] . "," .
      "`estu_carrera`=" . $values['carrera'] . "," .
      "`estu_codigo`=" . $values['codigo'] . "," .
      "`estu_telf`=" . $values['telef'] . "," .
      "`estu_ciclo`=" . $values['ciclo'] . " WHERE `id`=" . $id
    );
  }
  public function DeleteData()
  {
  }
  public function actualizar($id, $data)
  {
    $this->db->query("ESRUDIANTES `estudiantes` ");
    
    // $this->db->where($where);
    // $this->db->update($tabla, $data);
    // return $this->db->affected_rows();
  }
}
