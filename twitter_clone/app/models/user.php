<?php 

namespace app\models;

use mf\model\Model;

//class to create the user
class User extends Model {

	private $id;
	private $name;
	private $email;
	private $pass;

	public function __get($att) {
		return $this->$att;
	}

	public function __set($att, $value){
		$this->$att = $value;

	}
	//save
	public function save(){
		//querty to insert at the user table
		$query = "insert into users(name, email, pass)values(:name, :email, :pass)";
		//recover db from mf/model
		$stmt = $this->db
		//binding values
		$stmt->bindValue(':name', $this->__get('name'));
		$stmt->bindValue(':email', $this->__get('email'));
		$stmt->bindValue(':pass', $this->__get('pass')); //md5 to encrypt , md5() -> hash 32 characters
		$stmt-> execute();

		//return the object itself
		return $this;
	}

	//validate

	//recover user by e-mail


}
 ?>
