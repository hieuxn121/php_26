<?php 
	$array = [1, 'Zent', 'Be all you can be !'];

	$array2 = array(
		0 => 'Zent',
		9 => 'Be all you can be'
	);

	$array2[] = 'Zent Group';
	$array2[] = "Be all you can be";
	$array2[] = 2;

	var_dump($array2);
	echo "<br>";
	echo "<pre>";
	print_r($array2);
	echo "</pre>";

	$array4 = ['Hieu',1,2,4];
	// Mang khong tuan tu
	$array3 = ['name' => "Nguyen Duc Hieu", 'age' => 18, 'add_school' => 'DHBKHN'];
	echo "<br>";
	echo "<pre>";
	print_r($array3);
	echo "</pre>";

	// Doc tung phan tu mang
	echo "Doc phan tu mang 1";
	echo "<br> Phan tu thu 0 : " . $array[0];
	echo "<br> Phan tu thu 1 : " . $array[1];
	echo "<br> Phan tu thu 2 : " . $array[2];
	echo "<br><br>";

	// Doc mang bang foreach 
	echo "Doc phan tu mang 2";
	foreach ($array2 as $key => $value) {
		if ($key == 9) {
			continue;
		}
	    echo "<br> Phan tu thu " . $key . ":" . $value;
	}

	//Doc mang bang vong for
	echo "<br>";
	for ($i=0; $i < count($array4) ; $i++) { 
		echo "<br> Phan tu thu ".$i." : ". $array4[$i];
	}
 ?>