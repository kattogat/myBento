<?php

require "app/config.php";
require "app/model/model.php";
require "app/model/pantryModel.php";

$action = isset( $_GET['action'] ) ? $_GET['action'] : 'show';
switch ($action) {
	case 'pantryAdd':
		require 'view/create.php';
		break;
	case 'pantryUpdate':
		require 'view/update.php';
		break;
	case 'pantryDelete':
		require 'view/delete.php';
		break;
	/*default:
		require 'view/index.php';
		break; */
}

if (isset($_GET['pantryAdd'])) {
	$pantry = new PantryModel($_GET['productName'], $pdo, $_GET['productQun'], $_GET['productLiter'], $_GET['productKg']);
	$pantry->addProduct(); 
	header("Location: view/index.php");
}

if (isset($_GET['pantryUpdate'])) {
	$pantry = new PantryModel($_GET['productName'], $pdo, $_GET['productQun'], $_GET['productLiter'], $_GET['productKg']);
	$pantry->updateProduct(); 
	header("Location: view/index.php");
}

if (isset($_GET['pantryDelete'])) {
	$pantryDel = new PantryModel($_GET['productName'], $pdo);
	$pantryDel->deleteProduct(); 
	header("Location: view/index.php");
} 