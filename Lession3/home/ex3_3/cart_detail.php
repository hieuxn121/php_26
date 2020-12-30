<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<style>
  		table{
  			width: 80%;
  			margin: 50px auto;
  		}
  		table, th, td {
  			border: 1px solid black;
  			text-align: center;
  			padding: 10px;
		}
  	</style>
</head>
<body>
	<table>
		<tr>
			<td colspan="6"></td>
			<td><a href="cart.php">Tiếp tục mua hàng</a></td>
		</tr>
		<tr><td colspan="7">Thông tin giỏ hàng</td></tr>
		<tr>
			<td>ID</td>
			<td>Tên sản phẩm</td>
			<td>Số lượng</td>
			<td>Đơn giá</td>
			<td>Thành tiền</td>
			<td>Thời gian cập nhật</td>
			<td></td>
		</tr>
		<?php if (isset($_SESSION['product_add'])) {
			foreach ($_SESSION['product_add'] as $key => $product) { ?>
			<tr>
				<td> <?php echo $product['id']; ?> </td>
				<td> <?php echo $product['name']; ?> </td>
				<td> <?php echo $product['sl']; ?> </td>
				<td> <?php echo number_format($product['price']).' VND'; ?> </td>
				<td> <?php echo number_format($product['sl']*$product['price']).' VND'; ?></td>
				<td> <?php echo $product['time']; ?></td>
				<td><a href="delete.php?id=<?php echo $product['id']?>">Xóa khỏi giỏ hàng</a></td>
			</tr>
		<?php } } ?>
		<tr>
			<td colspan="4">Tổng tiền</td>
			<td>
				<?php 
					$sum_price = null; $each_price = null;
					if (isset($_SESSION['product_add'])) {
					foreach ($_SESSION['product_add'] as $key => $product) {
						$each_price = $product['sl']*$product['price'];
						$sum_price += $each_price;
					}}
				 ?>
				 <?php echo number_format($sum_price).' VND'?>
			</td>
			<td colspan="2"></td>
		</tr>	
	</table>
</body>
</html>