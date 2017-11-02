<?php


Interface UserInterface{
	public function getAllPlayers() : array;
	public function getPlayerById($id) : array;
	public function getPlayerByUsername($username): array;
	// public function addPlayer(string $username, string $password): int;
	// public function removePlayer(int $id): bool;
}


class User implements UserInterface {

	private $db;

	function __construct(Database $db){
		$this->db = $db;


	}

	public function getAllPlayers() : array {
		return $this->db->select ("SELECT id, username FROM players");
	}

	public function getPlayerById($id): array {
		return $this->db->select (("SELECT * FROM players WHERE id = :id"),["id" => $id]);
	}

	public function getPlayerByUsername($username): array {
		return $this->db->select ("SELECT * FROM players WHERE username = :username");
	}

	// public function addPlayer(): array {
	// 	return $this->db->insert ("");
	// }

	// public function removePlayer(string $sql, array $param = []): bool {
	// 	return $this->db->remove("DELETE FROM players id = :id" . ["id" => $id]);
	// }
}