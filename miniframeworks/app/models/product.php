<?php 
namespace app\models;

use mf\model\model;

class Product extends Model {

	public function getProducts() {
	
		$query = "select id, description, price from tb_products";
		return $this->db->query($query)->fetchAll();
	}
}
 ?>
