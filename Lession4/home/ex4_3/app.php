<?php 
require_once('upload.php');
session_start();
    if (isset($_POST['submit'])) {
        $notice = file_upload('uploads','file_upload');
        if(gettype($notice) == "array"){
            foreach ($notice as $key => $value) {
                echo $value.'<br>';
            }
        }else{
            echo "File name is: " . $notice; // Trả về tên file nếu upload thành công
            $data = array(
                'name' => $_POST['name_file'],
                'file_name' => basename( $_FILES["file_upload"]["name"])

            );
            $_SESSION['uploads'][] = $data;
            header('Location: index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<body>
    <div class="container">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <h3>Upload document</h3>

            <div class="form-group">
                <label for="">Tên tài liệu</label>
                <input type="text" class="form-control" id="" placeholder="" name="name_file">
            </div>
            
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" id="" placeholder="" name="file_upload">
            </div> 
            
            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
</html>