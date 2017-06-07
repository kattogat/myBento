<?php

require "app/config.php";
require "app/model/Model.php";
require "app/model/Database.php";
require "app/model/PantryModel.php"; 

$action = isset( $_GET['action'] ) ? $_GET['action'] : 'show';
$ds = DIRECTORY_SEPARATOR;
$viewPath = __DIR__ . "{$ds}view{$ds}";

$pdo = new PDO($dsn, $user, $password, $options);
$db = new Database($pdo);

$for_index = new PantryModel($db, []); 

switch ($action) {
	case 'add':
		require $viewPath . 'create.php';
		break;
	case 'pantry-add':
		$postData = [
			'name' => $_POST['productName'],
			'qun' => $_POST['productQun'],
			'liter' => $_POST['productLiter'],
			'kg' => $_POST['productKg']
		];

		$pantry = new PantryModel($db, $postData);
		$pantry->addProduct(); 
		header("Location: index.php");
	break;	
	case 'update':
		require $viewPath . 'update.php';
		break;
	case 'pantry-update':
		$theArray = [
			'id' => $_GET['id'],
			'qun' => $_POST['productQun'],
			'liter' => $_POST['productLiter'],
			'kg' => $_POST['productKg'],
			'pdou' => $pdo
		];
		$pantryUpdate = new PantryModel($db, $theArray);
		$pantryUpdate->updateProduct();
		header("Location: index.php");
		break;
	case 'delete':
		$theid = ['id' => $_GET['id'], 'pdou' => $pdo];
		$pantryDel = new PantryModel($db, $theid);
		$pantryDel->deleteProduct($db);
		header("Location: index.php");
		break;
	default:
		$theThings = $for_index->getEverything();
		require $viewPath . 'index.php';
		break;
} 