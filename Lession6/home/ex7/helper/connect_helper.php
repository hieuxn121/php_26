<?php 
function connect(){
	$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL
	$username = "root";   // Tên đăng nhập
	
	$password = "";    // Mật khẩu truy cập
	
	$dbname = "demo2";   // Tên cơ sở dữ liệu muốn kết nối đến

	
// Tạo kết nối đến CSDL
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		echo "Fail to connect to MySQL: ".$conn->connect_error;
		exit();
	}
	else
		return $conn;
}
?>