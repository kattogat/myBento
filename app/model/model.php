<?php

class Model {
	
	protected $pdo;
	private $table;
	
	public function __construct($table, $pdo) {
		$this->table = $table;
		$this->pdo = $pdo;
	}
	

	public function getById($id) {
		$sql = "SELECT * FROM $this->table WHERE id = $id";
		$statement = $this->pdo->execute($sql);
		return $statement->fetch();
	}

	public function deleteById($id) {
		$sql = "DELETE FROM $this->table WHERE (id=:deluo)";
		$delete = $this->pdou->prepare($sql);
		$delete->execute(array(':deluo' => $id));
	}
	
}
