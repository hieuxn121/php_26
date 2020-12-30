<?php 
session_start();
// Lấy sinh viên trong session 
function getAllStudents(){
	if(isset($_SESSION['students']))
		return $_SESSION['students'];
	else
		return array();
}	
// Lấy chi tiết một sinh viên dựa vào id
function getEachStudent($id){
	// Lấy danh sách sinh viên để tìm
	$students = getAllStudents();
	$suitStudent = [];
	foreach ($students as $student) {
		if ($student['id'] == $id) {
			$suitStudent[] = $student; 
		}
	}
	return $suitStudent;
}
//Xóa một sinh viên bằng id
function deleteStudent($id){
	$students = getAllStudents();
	foreach ($students as $key => $student) {
		if ($student['id'] == $id) {
			unset($students[$key]);
		}
	}
	// Cập nhật lại Session chứa students
	$_SESSION['students'] = $students;
	return $students;
}

// Thêm vào sửa một sinh viên
function upDateStudent($id,$name,$email,$gender,$address){
	$students = getAllStudents();
	$newStudent = [
		'id' => $id,
		'name' => $name,
		'email' => $email,
		'gender' => $gender,
		'address' => $address
	];

	// Kiểm tra nếu trùng id để update
	$is_update_action = false;
	foreach ($students as $key => $student) {
		if ($student['id'] == $id) {
			$students[$key] = $newStudent;
			$is_update_action = true; // Đã update;
			setcookie('update', 'Đã update lại thông tin sinh viên thành công', time()+2);
		}
	}
	//Kiểm tra nếu khác id thì thêm mới 
	if($is_update_action == false)
	{
		$students[] = $newStudent;
		setcookie('new', "Đã thêm học sinh mới thành công", time()+2);
	}
	// Cập nhật lại Session chứa student
	$_SESSION['students'] = $students;
	return $students;
}
?>
