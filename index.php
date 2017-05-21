<?php

require "app/model/pantryModel.php";
require "app/model/model.php";

$action = isset( $_GET['action'] ) ? $_GET['action'] : 'show';
switch ($action) {
	case 'create':
		require 'view/create.php';
		break;
	case 'update':
		require 'view/update.php';
		break;
	case 'delete':
		require 'view/delete.php';
		break;
	case 'create':
		require 'view/create.php';
		break;
	default:
		require 'view/index.php';
		break;
}

$pantry = new PantryModel($_GET['productName'], $_GET['productQun'], $_GET['productLiter'], $_GET['productKg']);
	$pantry->addProduct(); 