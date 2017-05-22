<?php

require "model.php";

class PantryModel extends Model {
	private $table = "pantry";
	private $name;
	private $qun;
	private $liter;
	private $kg;

	public function __construct($name, $qun = "", $liter = "", $kg = "") {
		$this->name = $name;
		$this->qun = $qun;
		$this->liter = $liter;
		$this->kg = $kg;
	}
	
	public function addProduct() {	

		require __DIR__ . '/config.php';//require "C:\MAMP\htdocs\myBento\app\config.php"; //require "../app/config.php";
		
		$sql = "INSERT INTO $this->table (name, quantity, liter, kg)
            VALUES(:nameuo, :quntuo, :literuo, :kguo)";
		$pantry_intoDb = $pdo->prepare($sql);
		$pantry_intoDb->execute (array(':nameuo' => $this->name, ':quntuo' => $this->qun, ':literuo' => $this->liter, ':kguo' => $this->kg)); 
		
	}
	
	public function updateProduct() {
		
		require __DIR__ . '/config.php';//require "C:\MAMP\htdocs\myBento\app\config.php"; //require "../app/config.php";
		
		$sql2 = "UPDATE $this->table SET name = :nameolduo, quantity = :qunolduo, liter = :literolduo, kg = :kgolduo WHERE name = :newuo";
		$uppdate = $pdo->prepare($sql2);
		$uppdate->execute (array(':nameolduo' => $this->name, ':qunolduo' => $this->qun, ':literolduo' => $this->liter, ':kgolduo' => $this->kg, ':newuo' => $this->name)); 
		
	}
	
	public function deleteProduct() {
		
		require __DIR__ . '/config.php';//require "C:\MAMP\htdocs\myBento\app\config.php"; //require "../app/config.php";
		
		$sql = "DELETE FROM $this->table WHERE (name=:deluo)";
		$delete = $pdo->prepare($sql);
		$delete->execute (array(':deluo' => $this->name));
		
	}
	
	
}