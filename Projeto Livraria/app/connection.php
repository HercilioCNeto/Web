<?php 
namespace app;

class Connection {

	public static function getDb() {
		try {
			
			$conn = new \PDO(
				"mysql:host=localhost;dbname=RA45139;charset=utf8",
				"root",
				""
			);

			return $conn;

		} catch (\PDOException $e) {
			echo "Error";
		}
	}
}

 ?>
