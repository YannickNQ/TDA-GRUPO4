<?php

namespace App\Models;

use CodeIgniter\Model;

class MGeneral extends Model
{
    // protected $table      = 'estudiantes';
    // protected $primaryKey = 'id';

    // protected $returnType = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = [];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
    
    // public function get_data($campos,$tabla,$where=false,$orden=false){
	// 	$this->db->select($campos,false);
	// 	$this->db->from($tabla);
	// 	if($where!=false)
	// 		$this->db->where($where);
	// 	if($orden!=false)
	// 		$this->db->order_by($orden);
	// 	$query=$this->db->get();
	// 	if($query->num_rows()>0){
	// 		return $query->result();
	// 	}
	// 	return array();
	// }
	// public function actualizar($tabla,$where,$data){
	// 	$this->db->where($where);
	// 	$this->db->update($tabla,$data);
	// 	return $this->db->affected_rows();
	// }
	// public function insertar($tabla,$data){
	// 	$this->db->insert($tabla,$data);
	// 	return $this->db->affected_rows();
	// }
	// public function eliminar($tabla,$where){
	// 	$this->db->delete($tabla,$where);
	// 	return $this->db->affected_rows();
	// }
	// public function get_fecha(){
	// 	$this->db->select("
	// 		now() as fecha
	// 	",false);
	// 	$query=$this->db->get();
	// 	if($query->num_rows()>0){
	// 		return $query->result();
	// 	}
	// 	return array();
	// }
	// public function ultimo_ide(){
	// 	$this->db->select("
	// 		last_insert_id() as id
	// 	",false);
	// 	$query=$this->db->get();
	// 	if($query->num_rows()>0){
	// 		$result=$query->result();
	// 		return $result[0]->id;
	// 	}
	// 	return false;
	// }
}

?>