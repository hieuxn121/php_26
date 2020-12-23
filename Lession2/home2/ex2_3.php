<?php 
	$arr = array(1,4,2,6,9,100,4);
	echo "Mang dau vao: ";
	foreach ($arr as $value) {
	    echo $value."<span>&nbsp;&nbsp;&nbsp";
	}
	$temp="";
	for ($i=1; $i < count($arr) ; $i++) { 
		for($j=0; $j < $i; $j++){
			if($arr[$i] < $arr[$j]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $temp;
			}
		}
	}
	echo "<br>";
	echo "Mang dau ra tang dan: ";
	foreach ($arr as $value) {
	    echo $value."<span>&nbsp;&nbsp;&nbsp";
	}
 ?>