<?php

require "model.php";

class PantryModel extends Model {
	private $table = "pantry";
	private $name;
	private $qun;
	private $liter;
	private $kg;
	
	
	public function __construct($name, $qun, $liter = "", $kg = "") {
		$this->name = $name;
		$this->qun = $qun;
		$this->liter = $liter;
		$this->kg = $kg;
	}
	
	public function addProduct() {
		
		require "config.php";
		
		$sql = "INSERT INTO $this->table (name, quantity, liter, kg)
            VALUES(:nameuo, :quntuo, :literuo, :kguo)";
		$pantry_intoDb = $pdo->prepare($sql);
		$pantry_intoDb->execute (array(':nameuo' => $this->name, ':quntuo' => $this->qun, ':literuo' => $this->liter, ':kguo' => $this->kg)); 
		
	}
	
	public function updateProduct() {
		require "../config.php";
		$sql2 = "UPDATE $this->table SET (name = :nameolduo) AND (quantity = :qunolduo) AND (liter = :literolduo) AND (kg = :kgolduo) WHERE name = :newuo";
		$uppdate = $pdo->prepare($sql2);
		$uppdate->execute (array(':olduo' => $this->name, ':qunolduo' => $this->qun, ':literolduo' => $this->liter, ':kgolduo' => $this->kg, ':newuo' => $this->name)); 
		
	}
	
	public function deleteProduct() {
		require "../config.php";
		$sql = "DELETE FROM $this->table WHERE (name=:deluo)";
		$delete = $pdo->prepare($sql);
		$delete->execute (array(':deluo' => $this->name));
		
	}
	
	
}