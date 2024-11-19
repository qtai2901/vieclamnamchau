<?php
include "class.database.php";
global $conn;
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if(isset($_SESSION['ntd_id'])) {
    header("Location: index.php"); // Đã đăng nhập, chuyển hướng đến trang chính
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .container input[type="email"],
        .container input[type="password"] {
            width: calc(100% - 20px);
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .container input[type="submit"] {
            width: 100%;
            padding: 15px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
        }
        .container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }
        .forgot-password a {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-link a {
            color: #007bff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đăng nhập</h2>
        <?php
								if($_POST){
	
									$email=$_POST['email'];
									$password=$_POST['password'];
									$result=mysqli_query($conn,"SELECT * from nhatuyendung where email='$email' ");
									
									$row=mysqli_fetch_assoc($result);
									//var_dump($row);
									//die;
									if($row){
									   // $user = mysqli_fetch_assoc($result);
									    if (password_verify($password, $row['password'])) {
									       $_SESSION['ntd_id'] = $row['id'];

            // Chuyển hướng đến trang chính sau khi đăng nhập thành công
                                     header("Location: index.php");
                                    exit();
									        
									    }
									    else{
										echo '<p style="color:red">Tên đăng nhập hoặc mật khẩu không đúng!</p>';
									}
									}else{
										echo '<p style="color:red">Tên đăng nhập hoặc mật khẩu không đúng!</p>';
									}
									}
									?>				
        <form action="loginntd.php" method="post">
            <input type="email" name="email" placeholder="Địa chỉ email" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <input type="submit" value="Đăng nhập">
        </form>
        <div class="forgot-password">
            <a href="#">Quên mật khẩu</a>
        </div>
    </div>
    <div class="register-link">
        Bạn là nhà tuyển dụng mới? <a href="registerntd.php">Đăng ký tài khoản</a>.
    </div>
</body>
</html>
