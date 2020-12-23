<?php 
$bien_toan_cuc = 12;

function kiem_tra(){
	$bien_cuc_bo = 18;
	global $bien_toan_cuc;
	$bien_toan_cuc++;
	echo $bien_toan_cuc;
	// $bien_cuc_bo++;
	// echo $bien_cuc_bo;
}

kiem_tra();
kiem_tra();

echo "<br>";
function kiem_tra_2(){
	static $a = 0;
	$a++;
	if ($a > 5)
		echo "Fail";
	else
		echo $a;
}

kiem_tra_2();
kiem_tra_2();
kiem_tra_2();
kiem_tra_2();
kiem_tra_2();
kiem_tra_2();
kiem_tra_2();
?>