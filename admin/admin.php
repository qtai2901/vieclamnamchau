<?php
include "../class.database.php";
global $conn;
session_start();
if(isset($_SESSION['admin_id'])) {
    $admin_id = $_SESSION['admin_id'];
    $logged_in = true;
}
else 
{
    // header("Location: admin_login.php");
    // exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
<title>Trang Admin Việc Làm Tại Năm Châu</title>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #D0A9F5;
}



header {
    background-color: #9A2EFE;
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav {
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px;
    background-color: #3104B4;
    border-radius: 5px;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: rgba(255, 255, 255, 0.7);
    color: #000;
}

.container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
}

</style>
</head>
<body>
    <header>
        <h1>Trang Admin Việc Làm Tại Năm Châu</h1>
    </header>
<div class="" >
    

    <nav>
        <ul>
            <li><a href="admin_nguoitimviec.php">Quản lý Người Tìm Việc</a></li>
            <li><a href="admin_nhatuyendung.php">Quản lý Nhà Tuyển Dụng</a></li>
            <li><a href="admin_quanlytin.php">Quản lý Tin Tuyển Dụng</a></li>
              <li style="width: 100px;"><a href="admin_nguoitimviec.php">  Next <i class="fa fa-chevron-right" aria-hidden="true"></i> </a></li>
        </ul>
    </nav>

    
</div>


</body>
</html>
