<?php
session_start();
include "../class.database.php";
global $conn;
// Truy vấn dữ liệu từ bảng
// $sql = "SELECT * FROM tin_tuyen_dung"; 
// $result = mysqli_query($conn, $sql);
$nghenghiepData = json_decode(file_get_contents('../nghenghiep.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<script src="https://api.4gsieure.net/public/assets/cute/cute-alert.js"></script>-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
<title>Quản lý Đăng Tin Tuyển Dụng</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 95%;
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
.approve-btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 2px 0;
    cursor: pointer;
    border-radius: 5px;
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
            <li style="width: 100px;"><a href="admin_nhatuyendung.php"> <i class="fa fa-chevron-left" aria-hidden="true"></i> Previou</a></li>
        
             
        </ul>
    </nav>
    <h2>Quản lý Đăng Tin Tuyển Dụng</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Công Ty</th>
                <th>Chức Danh</th>
                <th>Nghề Nghiệp</th>
                <th>Hình Thức Làm Việc</th>
                <th>Bằng Cấp</th>
                <th>Kinh Nghiệm</th>
                <th>Cấp Bậc</th>
                <th>Độ Tuổi Tối Thiểu</th>
                <th>Độ Tuổi Tối Đa</th>
                <th>Yêu Cầu Giới Tính</th>
                <th>Số Lượng Tuyển</th>
                <th>Thời Hạn Thử Việc</th>
                <th>Hạn Nộp Hồ Sơ</th>
                <th>Lương Tối Thiểu</th>
                <th>Lương Tối Đa</th>
                <th>Dịch Vụ</th>
                <th>Tình Trạng Tin</th>
                <th>Trạng Thái</th>
                <th>Kiểm duyệt</th>
            </tr>
        </thead>
        <tbody>
            
             <?php foreach (get_list("SELECT * FROM `tin_tuyen_dung`",$conn) as $row) {
            $dichvu = get_list("SELECT * FROM `dich_vu` WHERE `id` = '" . $row['dich_vu_id'] . "'", $conn)[0]['ten_dich_vu'];
 ; ?>
             
             <tr>
             <td><?= $row['id'] ?></td>
             <td><?= $row['ten_cty'] ?></td>
             <td><?= $row['chuc_danh'] ?></td>
             <td><?= $nghenghiepData[$row['nghe_nghiep']] ?></td>
             <td><?= $row['hinh_thuc_lam_viec'] ?></td>
             <td><?= $row['bang_cap'] ?></td>
             <td><?= $row['kinh_nghiem'] ?></td>
             <td><?= $row['cap_bac'] ?></td>
             <td><?= $row['do_tuoi_toi_thieu'] ?></td>
             <td><?= $row['do_tuoi_toi_da'] ?></td>
             <td><?= $row['yeu_cau_gioi_tinh'] ?></td>
             <td><?= $row['so_luong_tuyen'] ?></td>
             <td><?= $row['thoi_han_thu_viec'] ?></td>
             <td><?= date("d-m-Y", strtotime($row['han_nop_ho_so'])) ?></td>
             <td><?= $row['luong_toi_thieu'] ?></td>
             <td><?= $row['luong_toi_da'] ?></td>
             
             <td><?= $dichvu ?></td>
             <td><?= $row['tinh_trang_tin'] == 0 ? "đang ẩn" : "đang bật" ?></td>
             <td><?= $row['trang_thai'] == 0 ? "Chờ duyệt" : "Đã duyệt" ?></td>
             <td>
                 <button class="approve-btn" onclick="Duyet(<?= $row['id'] ?>)"
                                                type="button"> Duyệt</button>
                 
                 
                 </td>
             </tr>
             <?php } ?>
        </tbody>
    </table>
</div>


</body>
<!-- HTML -->


<script>

function Duyet(id) {
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'process.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.status === "2") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.msg
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.msg
                    });
                }
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Đã xảy ra lỗi khi gửi yêu cầu.'
                });
            }
        }
    };
    xhr.onerror = function() {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Không thể gửi yêu cầu.'
        });
    };
    xhr.send('action=Duyet&id=' + id);
}


</script>

</html>
