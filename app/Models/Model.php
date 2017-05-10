<?php

namespace App\Models;

echo ":(";

class Model {
	require "../config/config.php";
	
	protected $id;
	private $db;
	private $table;
	
	public function __construct($id, $db, $table) {
		$this->id = $id;
		$this->db = $db;
		$this->tabel = $table;
	}
	
	public function getId() {
		//return this->id;
		echo $this->db;
	}

	public function getById() {
		return "SELECT * FROM" . $this->table ."WHERE" . $this->id;
	}
	
}