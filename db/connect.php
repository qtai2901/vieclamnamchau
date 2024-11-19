<?php
$con = mysqli_connect("localhost:3307", "root", "", "vieclam5chau");

// Kiểm tra kết nối
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo "Connected successfully!";
}

mysqli_set_charset($con, "utf8");
?>
