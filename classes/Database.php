<?php

class Database {

	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "game";

	private $connection;

	function __construct(){

		try {
			$this->connection = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=utf8", $this->username , $this->password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "connected";

		} catch(PDOException $e) {
			$response['message'] = ['type' => 'danger','body' => $e->getMessage()];
			echo $e->getMessage();
		}
	}


	public function select(string $sql, array $param = []): array {// example SELECT * FROM users WHERE id = :id
		$statement = $this->connection->prepare($sql);
		// example $param = ["id" => 666];
		$statement->execute($param);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function insert(string $sql, array $param = []) : int {
		$statement = $this->connection->prepare($sql);
		$statement->execute($param);
		return $this->connection->lastInsertId();
	}	

	public function remove(string $sql, array $param = []) : bool {
		$statement = $this->connection->prepare($sql);
		$statement->execute($param);

	}		


	function __destruct() {

		$this->connection = null;
	}
}