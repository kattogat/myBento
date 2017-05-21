<?php
require "../config.php";
require "modeler.php";
require "../controler.php";

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
		require "../config.php";
		
		$sql = "INSERT INTO $this->table (name, quantity, liter, kg)
            VALUES(:nameuo, :quntuo, :literuo, :kguo)";
		$pantry_intoDb = $pdo->prepare($sql);
		$pantry_intoDb->execute (array(':nameuo' => $this->name, ':quntuo' => $this->qun, ':literuo' => $this->liter, ':kguo' => $this->kg)); 
		
		$done = true;
		return $done;
	}
	
	public function updateProduct() {
		$sql2 = "UPDATE $this->table SET lossenord = :olduo WHERE anvandarnamn = :newuo";
		$uppdate = $pdo->prepare($sql2);
		$uppdate->execute (array(':olduo' => $old, ':newuo' => $new)); 
		
	}
	
	public function deleteProduct() {
		require "../config.php";
		$sql = "DELETE FROM $this->table WHERE (name=:deluo)";
		$bort = $pdo->prepare($sql);
		$bort->execute (array(':deluo' => $this->name));
		
		$done = true;
		return $done;
	}
}

$test = new PantryModel($conName, $conQun, $conLiter, $conKg);
$test->addProduct(); 
