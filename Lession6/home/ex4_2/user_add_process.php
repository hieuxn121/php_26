<?php 
	// Thong so ket noi CSDL
	
require_once('connect.php');

$conn = new mysqli($servername, $username, $password, $dbname);

// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO users (id,name, email,password,avatar,created_at) VALUES (' ".$data['id']." ',' ".$data['name']." ',' ".$data['email']." ' , '". $data['password']. "', '". $data['avatar']. "', '". $data['created_at']. "')";

// Thực thi câu lệnh
    $status = $conn->query($query);
   if ($status == true) {
   	 setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   }
    header("Location: user.php");
?>