<?php
session_start();
include "class.database.php";
global $conn;
// var_dump($_SESSION);
// Kiểm tra xem người dùng đã đăng nhập chưa
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $result= mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from users where id='$user_id' "));
    $info = "taikhoancuatoi.php";
    $text = "Xem thông tin cá nhân";
 
         $hoten = $result['hoten'];
 
    
    $logged_in = true;
} else if(isset($_SESSION['ntd_id'])) {
    $ntd_id = $_SESSION['ntd_id'];
    $result= mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from nhatuyendung where id='$ntd_id' "));
    $hoten = $result['hoten'];
    $info = "taotintuyendung.php";
    $text = "Trang quản lý nhà tuyển dụng";
    $logged_in = true;
}
else 
{
    $logged_in = false;
}
?>