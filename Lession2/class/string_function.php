<?php 
	$str = "a,b,c,d";
	$data = explode(',',$str);
	var_dump($data);
	$new_str = implode('-', $data);
	echo $new_str;
 ?>