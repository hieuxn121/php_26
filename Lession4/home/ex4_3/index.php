<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
    <div class="container">
        <h3 class="text-center">--- Documents ---</h3>
        <a href="app.php" class="btn btn-success">Upload Document</a>
        <table class="table">
            <thead>
                <th> No </th>
                <th> Name </th>
                <th> Downloads </th>
                <th>#</th>
            </thead>
        <?php if (isset($_SESSION['uploads'])) {
        foreach($_SESSION['uploads'] as $key=> $value){ ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><a class="btn btn-primary" href="uploads/<?php echo $value['file_name']?>">Download</a></td>
                <td><a class="btn btn-danger" href="remove.php?id=<?=$key?>">Remove</a></td>
            </tr>
        <?php }} ?>
        </table>
    </div>
</body>
</html>