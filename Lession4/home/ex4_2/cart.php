<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style>
    	a{
    		color: white;
    		text-decoration: none;
    	}
    	img{
    		width: 100px;
    		height: 100px;
    	}</style>
</head>
<body>
	<div class="container">
		<h1 align="center">Products in Cart</h1>
		<a href="index.php"><div class="btn btn-info">Back to home</div></a>
		<table class="table" style="margin-top: 20px">
			<tr style="font-weight: bold">
				<td>Code</td>
				<td>Name</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Amount</td>
				<td>Image</td>
			</tr>
			<?php if (isset($_SESSION['product_add'])) {
					 foreach ($_SESSION['product_add'] as $key => $product) { ?>
				<tr>
					<td><?php echo $key?></td>
					<td><?php echo $product['name']?></td>
					<td><?php echo number_format($product['price']).' VND'?></td>
					<td>
						<span><a href="add_process.php?code=<?php echo $key?>&nb=1"><button class="btn btn-success">+</button></a></span>
						<span><?php echo $product['sl'] ?></span>
						<span><a href="add_process.php?code=<?php echo $key?>&nb=-1"><button class="btn btn-info">-</button></a></span>
					</td>
					<td><?php echo number_format($product['sl']*$product['price']).' VND'; ?></td>
					<td><img src="<?php echo $product['img'] ?>" alt=""></td>
					<td><a href="delete.php?code=<?php echo $key?>"><button class="btn btn-danger">Delete</button></a></td>
				</tr>
				<?php } }?>
				<tr>
					<td colspan="4">Total</td>
					<td colspan="3">
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
				</tr>   
		</table>

	</div>
</body>
</html>