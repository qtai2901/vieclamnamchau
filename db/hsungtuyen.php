<?php
include "../class.database.php";
global $conn;
if ($_POST) {
    $quocgia = $_POST['quocgia'];
    $hoten = $_POST['name'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $sql = "INSERT INTO hosoungtuyen (hoten,sdt ,email, school, quocgia) VALUES 
    ('$hoten','$sdt','$email', '$school', '$quocgia')";
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['success_message'] = "Đã đăng ký tư vấn thành công";
        header("Location: ../index.php");
            exit();
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}