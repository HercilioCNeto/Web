<?php 
namespace app\models;

use mf\model\model;

class Info extends Model{

	public function getInfo() {
	
		$query = "select title, description from tb_info";
		return $this->db->query($query)->fetchAll();
	}
}
 ?>