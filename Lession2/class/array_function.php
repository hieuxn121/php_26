<?php 
	$name = ["Hieu", "Hanh", "Hop", "Cuong"];
	var_dump(in_array('Hieu', $name));
	var_dump(in_array('Tung', $name));

	echo "So luong phan tu trong mang: ". count($name);

	$info = array(
		'ID' => '20184258',
		'NAME' => 'Nguyen Duc Hieu',
		'PHONE' => '0911372556',
		'EMAIL' => 'nguyenhieu12012000@gmail.com'
	);

	if (array_key_exists('IddD', $info)) {
		echo "ID". $info['ID'];
	}
	else
		echo "Khong ton tai ID nay";

	array_push($info, 'newyear');
	$del = array_pop($info);

	unset($info['ID']);
	var_dump($info);

	$info[] = 'new3';
	$info[] = 'new4';
?>