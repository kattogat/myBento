<?php

class Model {
	
	protected $id;
	private $db;
	private $table;
	
	public function __construct($id, $db, $table) {
		$this->id = $id;
		$this->db = $db;
		$this->tabel = $table;
	}
	
	public function getId() {
		return $this->id;
		
	}

	public function getById() {
		require "../config.php";
		$sql = "SELECT * FROM $this->table WHERE id = $this->id";
		$statement = $pdo->query($sql);
		return $statement;
	}
	
	public function getEverything() {
		$sql = "SELECT * FROM" . $this->table;
		$statement = $pdo->query($sql);
		return $statement;
	}
	
}