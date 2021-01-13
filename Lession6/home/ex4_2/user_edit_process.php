<?php
require_once('connect.php'); 
	$data = $_POST;
	$query = "UPDATE users SET name = '" . $data['name'] . "', email = '".$data['email']."', password = '".$data['password']."', avatar = '".$data['avatar']."' ,created_at = '".$data['created_at']."'  WHERE  id =  " . $data['id'];
	$status = $conn->query($query);
	if ($status == true) {
		setcookie('update',"Đã update thông tin thành công", time()+2);
	}
    header("Location: user.php");
?>