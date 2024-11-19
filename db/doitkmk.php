<?php
include "../class.database.php";
global $conn;



if ($_POST) {
    $ntd_id = $_POST["ntd_id"];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE nhatuyendung SET email='$email', password='$hashed_password' WHERE id ='" . $ntd_id . "'";
                if ($conn->query($sql) === TRUE) {
        session_start();
        // echo "thành công";
        $_SESSION['success_message'] = "Đã thay đổi thành công";
        header("Location: ../thongtintaikhoan.php");
            exit();
                }
                else echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
else {
    echo "lỗi";
}