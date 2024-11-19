<?php
include"../class.database.php";
global $conn;
if ($_POST) {
    $user_id = $_POST['user_id'];
    $hoten = $_POST['hoten'];
    $ngay_sinh = date("Y-m-d", strtotime($_POST["ngay_sinh"]));
    $thanhpho = $_POST['thanhpho'];
    $diachi = $_POST['dia_chi'];
    $gender = $_POST['gender'];
    $tt_honnhan = $_POST['marital-status'];
    $sdt = $_POST['sdt'];
    
    $sql = "INSERT INTO hosotructuyen (user_id, hoten, ngay_sinh, thanhpho, dia_chi, gioi_tinh, tt_honnhan, sdt) 
        VALUES ('$user_id', '$hoten', '$ngay_sinh', '$thanhpho', '$diachi', '$gender', '$tt_honnhan', '$sdt')";
        if ($conn->query($sql) === TRUE) {
    session_start();
        // echo "thành công";
        $_SESSION['success_message'] = "Đã thay đổi thành công";
        header("Location: ../index.php");
}
}
?>