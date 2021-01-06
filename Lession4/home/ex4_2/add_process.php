<?php 
session_start();
 $products = [
 		'SP001' => [
 			'name' => "IP 7",
 			'price' => 5000000,
 			'quantity' => 20,
 			'img' => "https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-gold-600x600-1-600x600.jpg",
 			'sl' => 0
 		],
 		'SP002' => [
 			'name' => "IP 8",
 			'price' => 7500000,
 			'quantity' => 10,
 			'img' => "https://didongviet.vn/pub/media/catalog/product//8/-/8-min.jpg",
 			'sl' => 0
 		],
 		'SP003' => [
 			'name' => "IP X",
 			'price' => 10000000,
 			'quantity' => 25,
 			'img' => "https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-hh-600x600.jpg",
 			'sl' => 0
 		],
 		'SP004' => [
 			'name' => "IP 11",
 			'price' => 15000000,
 			'quantity' => 30,
 			'img' => "https://shopdunk.com/wp-content/uploads/2019/09/iP11Pro-2.jpg",
 			'sl' => 0
 		],
 		'SP005' => [
 			'name' => "IP 12",
 			'price' => 20000000,
 			'quantity' => 40,
 			'img' => "https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-new-600x600-200x200.jpg",
 			'sl' => 0
 		]
 	];
 if (isset($_GET['code'])) {
 	$code = $_GET['code'];
 	if (isset($_GET['nb'])) {
		$nb = $_GET['nb'];
		if ($nb == -1) {
			$_SESSION['product_add'][$code]['sl'] -= 2;
		}
	}
 	if (isset($_SESSION['product_add'][$code])) {
 		$_SESSION['product_add'][$code]['sl']++;
 		if ($_SESSION['product_add'][$code]['sl'] > $products[$code]['quantity']) {
 			$_SESSION['product_add'][$code]['sl'] = $products[$code]['quantity'];
 		}
 		if ($_SESSION['product_add'][$code]['sl'] < 1) {
 			$_SESSION['product_add'][$code]['sl'] = 1;
 		}
 	}
 	else{
 		$_SESSION['product_add'][$code] = $products[$code];
 		$_SESSION['product_add'][$code]['sl'] = 1;
	}
		header("Location: cart.php");
	}

?>