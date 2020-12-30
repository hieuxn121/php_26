<?php 
	require('add_process.php');
	$students = getAllStudents();
	if (isset($_GET['id_detail'])) {
		$id = $_GET['id_detail'];
	}
	echo "<h1>Thông tin chi tiết sinh viên</h1>";
	echo "<a href='list.php'>Quay trở lại danh sách sinh viên</a>".'<br>';
	if (isset($id)) {
		foreach ($students as $student) {
		if ($student['id'] == $id) {
			echo "<br>Mã sinh viên: ".$student['id'];
			echo "<br>Họ tên: ".$student['name'];
			echo "<br>Email: ".$student['email'];
			echo "<br>Giới tính: ".$student['gender'];
			echo "<br>Địa chỉ: ".$student['address'];
		}
	}
	}
?>