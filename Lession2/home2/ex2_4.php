<?php 
	$initStr = " vŨ văN thƯơNg ";
	echo "Chuoi dau vao:".$initStr;
	$initStr = trim($initStr);
	$initStr = mb_strtolower($initStr);
	$initStr = ucwords($initStr);
	$initStr = $initStr.".";
	echo "<br>";
	echo "Chuoi dau ra:".$initStr;
 ?>