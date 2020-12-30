<?php 
require ("add_process.php");
$students = getAllStudents();
$notice = null;
if (isset($_COOKIE['delete'])) {
	$notice = $_COOKIE['delete'];
}
if (isset($_COOKIE['new'])) {
	$notice = $_COOKIE['new'];
}
if (isset($_COOKIE['update'])) {
	$notice = $_COOKIE['update'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh Sách Sinh Viên</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    	form{
    		display: inline-block;
    	}
    </style>
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body" style="text-align: center;">
				<span class="label" style="color: black;font-size: 30px;">Danh Sách Sinh Viên</span><br>

				<a href="add.php" style="margin-top: 30px"><button type="button" class="btn btn-primary">Thêm</button></a>
				<?php if (isset($notice)) { ?>
					<div style="margin-top: 30px;" class="alert alert-success" role="alert">
  						<?php echo $notice; ?>
					</div>
				<?php } ?>
				<div class="table" style="margin-top: 20px">
					<table class="table">
						<tr>
							<th>#</th>
							<th>Mã Sinh Viên</th>
							<th>Họ Tên</th>
							<th>Action</th>
						</tr>
						<?php foreach ($students as $key => $student){ ?>
						<tr align="center">
							<td><?php echo $key+1; ?></td>
							<td><?php echo $student['id']; ?></td>
							<td><?php echo $student['name']; ?></td>
							<td>
									<form action="delete.php" method="POST">
										<input type="hidden" value="<?php echo $student['id']; ?>" name="id_del"/>
										<input class="btn btn-danger" type="submit" value="detele" name="delete" onclick="return confirm('Xác nhận muốn xóa sinh viên này');">
									</form>
									<form action="detail.php" method="GET">
										<input type="hidden" value="<?php echo $student['id'];?>" name="id_detail">
										<input class="btn btn-success" type="submit" value="detail" name="detail">
									</form>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>