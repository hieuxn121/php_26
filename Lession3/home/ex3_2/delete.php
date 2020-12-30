<?php 
session_start();
if (isset($_POST['delete'])) {
	require 'add_process.php';
	if (isset($_POST['id_del'])) {
		$id_del = $_POST['id_del'];
	}
	else
		$id_del = '';
	deleteStudent($id_del);
	setcookie('delete','Đã xóa thành công',time() + 2);
}
header("Location:list.php");
 ?>