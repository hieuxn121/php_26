<?php 
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
		 <legend><h3 style="text-align: center; margin-top: 30px">ZENT GROUP - PHP - Thực hành về gửi dữ liệu sử dụng POST</h3></legend>
		 <h4 align="center">Thông tin sinh viên</h4>
		 <ul>
		 	<li><?php echo $name;?></li>
		 	<li><?php echo $phone;?></li>
		 	<li><?php echo $email;?></li>
		 	<li><?php echo $gender;?></li>
		 	<li><?php echo $address;?></li>
		 </ul>
	</div>
	<a href="index.html">Quay trở lại trang nhập thông tin</a>
</body>
</html
