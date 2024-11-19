<?php
// Bắt đầu session
session_start();

// Hủy bỏ tất cả các biến session
$_SESSION = array();

// Hủy bỏ session
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
header("Location: admin.php");
exit();
?>
