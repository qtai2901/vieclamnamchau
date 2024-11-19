
<?php
session_start();
include "../class.database.php";
global $conn;
// Truy vấn dữ liệu từ bảng
$sql = "SELECT * FROM nhatuyendung"; 
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
<title>Quản lý Nhà Tuyển Dụng</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    margin: 20px auto;
}

h2 {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

thead {
    background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
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

    </style>
</head>
<body>

<div class="container">
     <nav>
        <ul>
            <li style="width: 100px;"><a href="admin_nguoitimviec.php"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Previou</a></li>
        
              <li style="width: 100px;"><a href="admin_quanlytin.php"> <i class="fa fa-chevron-right" aria-hidden="true"></i>  Next</a></li>
        </ul>
    </nav>
    <h2>Quản lý Nhà Tuyển Dụng</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và Tên</th>
                <th>Email</th>
                <th>Ngày Đăng Ký</th>
                <th>Số Điện Thoại</th>
                <th>Tên Công Ty</th>
                <th>Mã Số Thuế</th>
                <th>Quy Mô Nhân Sự</th>
                <th>Châu Lục</th>
                <th>Quốc Gia</th>
                <th>Tỉnh</th>
                  <th>Huyện</th>
                <th>Địa Chỉ</th>
                <th>Lĩnh Vực</th>
                  <th>Email liên hệ</th>
                    <th>Địa chỉ liên hệ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Kiểm tra và hiển thị dữ liệu
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["ho_ten"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["created_at"] . "</td>";
                    echo "<td>" . $row["sdt"] . "</td>";
                    echo "<td>" . $row["name_congty"] . "</td>";
                    echo "<td>" . $row["masothue"] . "</td>";
                    echo "<td>" . $row["quymonhansu"] . "</td>";
                    echo "<td>" . $row["chauluc"] . "</td>";
                    echo "<td>" . $row["quocgia"] . "</td>";
                    echo "<td>" . $row["tinh"] . "</td>";
                    echo "<td>" . $row["huyen"] . "</td>";
                    echo "<td>" . $row["diachi"] . "</td>";
                    echo "<td>" . $row["linhvuc"] . "</td>";
                     echo "<td>" . $row["email_lienhe"] . "</td>";
                      echo "<td>" . $row["diachi_lienhe"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Không có dữ liệu";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
