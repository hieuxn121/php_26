<?php 
	$arr = array(1,4,2,6,9,100,4);
	$arr2 = array();
	echo "Mang dau vao: ";
	foreach ($arr as $key => $value) {
	    echo $value."<span>&nbsp;&nbsp;&nbsp";
	}
	$n = count($arr);$j=0;
	for ($i=$n-1 ; $i>=0 ; $i--) { 
		$arr2[$j] = $arr[$i];
		$j++;
	}
	echo "<br>";
	echo "Mang dau ra: ";
	foreach ($arr2 as $key => $value) {
	    echo $value."<span>&nbsp;&nbsp;&nbsp";
	}
	
 ?>