<?php

class Model {
	
	protected $id;
	protected $pdo;
	private $db;
	private $table;
	
	public function __construct($id = "", $table, $pdo) {
		$this->id = $id;
		$this->table = $table;
		$this->pdo = $pdo;
	}
	
	public function getId() {
		return $this->id;
		
	}

	public function getById() {
		$sql = "SELECT * FROM $this->table WHERE id = $this->id";
		$statement = $pdo->query($sql);
		return $statement;
	}
	
	public function getEverything() {
		
		//require "../app/config.php";
		
		$sql = "SELECT * FROM $this->table";
		$statement = $this->pdo->query($sql);
		
		foreach( $statement as $row ) {
			/*if ($row['kg'] != NULL) {
				$kg = $row['kg']
			} else {
				$kg = "";
			}
			if ($row['liter'] != NULL) {
				$liter = $row['liter']
			} else {
				$liter = "";
			} */
			echo "<p>Det finns " . $row['quantity'] . " " . $row['name'] . ".</p>";
		}
	}
	
}