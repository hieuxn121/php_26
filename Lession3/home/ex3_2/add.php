<?php
require ("add_process.php");
$student = [];
    if (isset($_POST['moveList'])) {
    
        $student['id'] = isset($_POST['id']) ? $_POST['id'] : '';
        $student['name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $student['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $student['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
        $student['address'] = isset($_POST['address']) ? $_POST['address'] : '';
    upDateStudent($student['id'],$student['name'],$student['email'], $student['gender'],$student['address']); 
    header('Location:list.php'); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" accept-charset="utf-8" role="form" id="formSV">

            <fieldset>
                <legend style="text-align: center;">Thông tin sinh viên</legend>

                <div class="form-group">
                    <label for="">Mã sinh viên</label>
                    <input type="text" class="form-control" name="id" placeholder="Nhập vào Mã sinh viên" required >
                </div>

                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input type="text" class="form-control" name="name" placeholder="Nhập vào Họ và tên" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Nhập vào Email" required>
                </div>

                <div class="form-group">
                    <label for="">Giới tính</label>
                    <div class="radio">
                        <label for="gender_male">
                            <input type="radio" name="gender" value="Male" required>Male
                        </label>
                        <label for="gender_female">
                            <input type="radio" name="gender" value="Female" required>Female
                        </label>
                        <label for="gender_other">
                            <input type="radio" name="gender" value="Other" required>Other
                        </label>
                    </div>
                    <label for="gender" class="error" style="font-weight: bold;"></label>
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" placeholder="Nhập vào Địa chỉ" required>
                </div>

                <input type="submit" class="btn btn-primary" name="moveList" />
            </fieldset>
        </form>
        <a href="list.php">Xem danh sách sinh viên</a>
    </div>
</body>
</html>