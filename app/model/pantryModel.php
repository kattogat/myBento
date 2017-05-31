<?php

class PantryModel extends Model {
	private $table = "pantry";
	private $name;
	private $qun;
	private $liter;
	private $kg;
	private $pdou;

	public function __construct($name, $pdou, $qun = "", $liter = "", $kg = "") {
		$this->name = $name;
		$this->qun = $qun;
		$this->liter = $liter;
		$this->kg = $kg;
		$this->pdou = $pdou;
	}
	
	public function addProduct() {	

		//require __DIR__ . '/config.php';
		
		$sql = "INSERT INTO $this->table (name, quantity, liter, kg)
            VALUES(:nameuo, :quntuo, :literuo, :kguo)";
		$pantry_intoDb = $this->pdou->prepare($sql);
		$pantry_intoDb->execute (array(':nameuo' => $this->name, ':quntuo' => $this->qun, ':literuo' => $this->liter, ':kguo' => $this->kg)); 
		
	}
	
	public function updateProduct() {
		
		$sql2 = "UPDATE $this->table SET name = :nameolduo, quantity = :qunolduo, liter = :literolduo, kg = :kgolduo WHERE name = :newuo";
		$uppdate = $this->pdou->prepare($sql2);
		$uppdate->execute (array(':nameolduo' => $this->name, ':qunolduo' => $this->qun, ':literolduo' => $this->liter, ':kgolduo' => $this->kg, ':newuo' => $this->name)); 
		
	}
	
	public function deleteProduct() {
		
		$sql = "DELETE FROM $this->table WHERE (name=:deluo)";
		$delete = $this->pdou->prepare($sql);
		$delete->execute (array(':deluo' => $this->name));
		
	}
	
	
}