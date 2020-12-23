<?php 
	function checkPan($str){
		if ($str == strrev($str)) {
			echo "Chuỗi đó là chuỗi Panlindrome";
		}
		else
			echo "Chuỗi đó không là chuỗi Panlindrome";
	}
	$str="ZenttneZ";
	echo "Chuỗi ban đầu là: ".$str."<br>";
	checkPan($str);
 ?>