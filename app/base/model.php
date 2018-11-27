<?php

namespace base;

use helper\database;

Class model {
	private $conn;

	public function __construct(){
		$db = new database;
		$this->conn = $db->connectDB();
	}

	protected function ExecuteQuery($sql,$params = []){
		try{
			$statement = $this->conn->prepare($sql);
			$statement->execute($params);
			return $statement->fetchAll();
		}catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}

	protected function ExcecuteNonQuery($sql,$params = []){
		try{
			$statement = $this->conn->prepare($sql);
			$statement->execute($params);
			return true;
		}catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
}