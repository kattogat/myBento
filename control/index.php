<?php
	require "../model/config.php";
	/* ---------------------- Utifrån ------------------------ */
	
	
	
	/* ---------------------- Innefrån ----------------------- */
	class GetInfoFromDb {
		private $sql;
		private $exe;
		
		public function __construct($sql, $exe) {
			$this->sql = $sql;
			$this->exe = $exe;
		}
		
		public function get_everything() {
			$sql = $this->sql; 
			$eveything = $pdo->query($sql);
		
		} 
		
		public function get_almost_everything() {
			require "../model/config.php";
			
			$sql = $this->sql;
			$statment = $pdo->prepare($sql);
			$statment->execute (array(':namuo' => $this->exe)); 
			$done = $statment->fetch(PDO::FETCH_ASSOC);
			
			return $done;
		} 
		
	}
	
	$tomat = new GetInfoFromDb("SELECT name FROM pantry WHERE name = :namuo", "Tomat");
	$thing = $tomat->get_almost_everything();
	var_dump($thing);
	echo "<br>";
	
	
?>