<?php 
	require_once('../helper/query_helper.php');
	$id = $_GET['id'];
	$status = delete('posts',$id);
	if ($status == true) {
		setcookie('delete',"Xóa một mục thành công", time()+2);
	}
	header("Location:posts.php");
?>