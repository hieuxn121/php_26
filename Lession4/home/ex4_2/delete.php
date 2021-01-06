<?php 
session_start();
if (isset($_GET['code'])) {
	$code = $_GET['code'];
	unset($_SESSION['product_add'][$code]);
	header("Location:cart.php");	
}
?>