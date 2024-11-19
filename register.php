<?php
include "class.database.php";
global $conn;
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if(isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Đã đăng nhập, chuyển hướng đến trang chính
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
								<?php
								if($_POST){
	
									$user_name=$_POST['email'];
									$user_pass=$_POST['user_pass'];
									$hoten = $_POST['hoten'];
									$hashed_password = password_hash($user_pass, PASSWORD_DEFAULT);
									$result=mysqli_query($conn,"SELECT * from users where email='$user_name' ");
									
									$row=mysqli_fetch_assoc($result);
									//var_dump($row);
									//die;
									if($row){
									    echo "Email đã tồn tại. Vui lòng sử dụng email khác!";
									   
									}else{
										$insert_query = "INSERT INTO users (hoten, email, password) VALUES (?, ?,?)";
										$stmt = $conn->prepare($insert_query);
                                        $stmt->bind_param("sss",$hoten, $user_name, $hashed_password);
                                        if ($stmt->execute()) {
            // Lưu thông tin người dùng vào session và chuyển hướng đến trang chính
                                        session_start();
                                        $_SESSION['user_id'] = $stmt->insert_id;
                                        $_SESSION['email'] = $user_name;

                                        header("Location: index.php");
                                        exit();
									}
									else {
            // Đăng ký thất bại
                                    echo "Đăng ký thất bại. Vui lòng thử lại!";
                                        }
									}
									}
									?>							
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng ký</h1>
                                    </div>
                                    <form class="user" action="register.php" method="post">
                                         <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputHoten" aria-describedby="emailHelp"
                                                placeholder="Enter full name ..." name="hoten">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password"  name="user_pass">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Repassword"  name="user_repass">
                                        </div>
                                        <button type="submit"class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                        <hr>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Đã có tài khoản, đăng nhập tại đây</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>