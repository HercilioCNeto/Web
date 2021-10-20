<?php 

namespace mf\model;

use app\connection;

class Container {

	public static function getModel($model) {

		$class = "\\app\\models\\".ucfirst($model);

		$conn = Connection::getDb();
		
		return new $class($conn);
	}
}



 ?>