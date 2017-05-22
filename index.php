<?php

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
	$pantry = new PantryModel($_GET['productName'], $_GET['productQun'], $_GET['productLiter'], $_GET['productKg']);
	$pantry->addProduct(); 
}

if (isset($_GET['pantryUpdate'])) {
	$pantry = new PantryModel($_GET['productName'], $_GET['productQun'], $_GET['productLiter'], $_GET['productKg']);
	$pantry->updateProduct(); 
}

if (isset($_GET['pantryDelete'])) {
	$pantryDel = new PantryModel($_GET['productName']);
	$pantryDel->deleteProduct(); 
} 