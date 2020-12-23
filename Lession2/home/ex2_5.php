<?php 
   $name = "Vũ Thị Ngọc Diệp";
   echo "Tên đầy đủ lúc đầu: ".$name."<br>";
   $ele = explode(" ", $name);
   $size = count($ele);
   echo "Kết quả đầu ra:"."<br>";
   echo " - Họ: ".$ele[0]."<br>";
   echo " - Tên đệm: ";
   for ($i=1; $i < $size-1 ; $i++) { 
   	echo $ele[$i]." ";
   }
   echo "<br>";
   echo " - Tên: ".$ele[$size-1]."<br>";
 ?>