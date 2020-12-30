<?php 
	session_start();
	$products = [
 	'SP1'=>[
 			'id' => 'SP1',
 			'name'=> 'Iphone 7 32GB',
 			'price'=> 5000000,
 			'sl' => 0,
 			'time'=> ''
 		],
 	'SP2'=>	[
 			'id' => 'SP2',
 			'name'=> 'Iphone 8 16GB',
 			'price'=> 6000000,
 			'sl' => 0,
 			'time' => ''
 		],
 	'SP3'=>	[
 			'id' => 'SP3',
 			'name'=> 'Iphone X 32GB',
 			'price'=> 10000000,
 			'sl' => 0,
 			'time' => ''
 		],
 	'SP4'=>	[
 			'id' => 'SP4',
 			'name'=> 'Iphone 12 256GB',
 			'price'=> 25000000,
 			'sl' => 0,
 			'time' => ''
 		],
 	'SP5'=>	[
 			'id' => 'SP5',
 			'name'=> 'Iphone 11 Pro Max 256GB',
 			'price'=> 25000000,
 			'sl' => 0,
 			'time' => ''
 		]
	];
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	else
		$id = '';
	if (isset($_SESSION['product_add'][$id])) {
		$_SESSION['product_add'][$id]['sl']++;
		$init_sl = $_SESSION['product_add'][$id]['sl'];
	}
	else{
		$products[$id]['time'] = date('d/m/Y - H:i:s');
		$_SESSION['product_add'][$id] = $products[$id];
		$_SESSION['product_add'][$id]['sl'] = 1;
	}
	if (isset($_SESSION['product_add'])) {
		header("Location:cart_detail.php");
	}
?>