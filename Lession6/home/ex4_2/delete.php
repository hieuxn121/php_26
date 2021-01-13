<?php 
	require_once('connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM users where id = ".$id;
	$status = $conn->query($query);
	if ($status == true) {
		setcookie('delete',"Xóa một mục thành công", time()+2);
	}
	header("Location:user.php");
?>