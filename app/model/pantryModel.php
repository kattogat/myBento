<?php

class PantryModel extends Model {
	private static $table = "pantry";
	private $id;
	private $name;
	private $qun;
	private $liter;
	private $kg;
	private $pdou;
	private $db;

	public function __construct(Database $db, $data = []) {
		// $data = ['kg' => 5];
		foreach ($data as $key => $value) {
			if (property_exists($this, $key)) {
				$this->{$key} = $value;
			}
		}
		$this->db = $db;
	}

	public static function load($db, $id) {
		$pantry = $db->getById(static::$table, $id);
		return new PantryModel($db, $pantry);
	} 
	
	public function addProduct() {	
		$this->id = $this->db->create(static::$table, array('name' => $this->name, 'quantity' => $this->qun, 'liter' => $this->liter, 'kg' => $this->kg));		
	}
	
	public function updateProduct() {
		
		$sql = "UPDATE pantry SET  quantity = :qunolduo, liter = :literolduo, kg = :kgolduo WHERE id = :iduo";
		$uppdate = $this->pdou->prepare($sql);
		$uppdate->execute (array( ':qunolduo' => $this->qun, ':literolduo' => $this->liter, ':kgolduo' => $this->kg, ':iduo' => $this->id)); 
		
	}

	public function deleteProduct() {
		$sql = "DELETE FROM pantry WHERE (id=:deluo)";
		$delete = $this->pdou->prepare($sql);
		$delete->execute (array(':deluo' => $this->id));
	}
	
	public function getEverything() {
		$table = static::$table;
		$statement = $this->db->getAll($table);
		
		return $statement;
		
	}
	
	
}