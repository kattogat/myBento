<?php
$action = isset( $_GET['action'] ) ? $_GET['action'] : 'show';
switch ($action) {
	case 'create':
		require 'view/create.php';
		break;
	default:
		require 'view/index.php';
		break;
}