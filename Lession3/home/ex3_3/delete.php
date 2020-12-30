<?php 
session_start();
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		unset($_SESSION['product_add'][$id]);
		header("Location: cart_detail.php");
	}
 ?>