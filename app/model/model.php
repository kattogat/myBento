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
		$statement = $this->pdo->query($sql);
		return $statement;
	}
	/*
	public function getEverything() {
		
		$sql = "SELECT * FROM $this->table";
		$statement = $this->pdo->query($sql);
		
		foreach( $statement as $row ) {
			//$data = "Det finns " . $row['quantity'] . " " . $row['name'] . ".";
			
			$name = $row['name'];
			$qun = $row['quantity'];
			$liter = $row['liter'];
			$kg = $row['kg'];
			
			$data[] = array(
				'name' => $name,
				'quantity' => $qun,
				'liter' => $liter,
				'kg' => $kg,
			);
			
			return $data;
		}
	} */
	
}