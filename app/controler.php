<?php /*
require "config.php";
//require "model/model.php";
require "model/pantryModel.php";
require "../index.php";

$controller = new Controller();
$action = isset( $_GET['action'] ) ? $_GET['action'] : 'show';
if (method_exists($controller, $action)) {
	$controller->$action();
}
else {
	header('HTTP/1.0 404 Not Found');
	echo 'Page not found';
}  

$pantry = new PantryModel($_POST['productName'], $_POST['productQun'], $_POST['productLiter'], $_POST['productKg']);

if(isset($_POST['pantryAdd'])) {
	$pantry->addProduct(); 
}
if(isset($_POST['pantryUpdate'])) {
	$pantry->updateProduct(); 
}
if(isset($_POST['pantryDelete'])) {
	$pantry->deleteProduct(); 
} */