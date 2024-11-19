<?php
session_start();
include "class.database.php";
global $conn;
if(isset($_SESSION['ntd_id'])) {
    $ntd_id = $_SESSION['ntd_id'];
    $result= mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from nhatuyendung where id='$ntd_id' "));
    $hoten = $result['hoten'];
    $info = "taotintuyendung.php";
    $text = "Trang quản lý nhà tuyển dụng";
    $logged_in = true;
}
else 
{
    header("Location: index.php");
    exit;
}
?>