
<?php 
function kiem_tra_so_chan_le($number){
	if ($number % 2 == 0)
		return true;
	else
		return false;
 }
function kiem_tra_so_chan_le_2($number){
 	if ($number % 2 == 0)
 		echo "So chan";
 	else
 		echo "So le";
}

$number = 16;
// if (kiem_tra_so_chan_le($number))
//  	echo "So chan";
// else
//  	echo "So le";
kiem_tra_so_chan_le_2($number);

// Ham tinh tong
echo "<br>";
echo tinhtong(6, 9);
echo "<br>";
echo tinhtong(2, 3, 5);
function tinhtong($a, $b, $c = false){
	$tong = $a + $b;
	if ($c != false) 
		$tong = $tong + $c;
	return $tong;
}
?>