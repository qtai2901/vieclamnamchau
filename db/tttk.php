<?php
include"../class.database.php";
global $conn;
if ($_POST) {
    
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $hoten = $_POST['hoten'];
    $ngay_sinh = date("Y-m-d", strtotime($_POST["ngay_sinh"]));
    $thanhpho = $_POST['thanhpho'];
    $diachi = $_POST['diachi'];
    $gender = $_POST['gender'];
    $tt_honnhan = $_POST['tt_honnhan'];
    $sdt = $_POST['sdt'];
    if ($_POST['action'] == "thaydoimail") {
        $sql = "UPDATE users SET email='$email' WHERE id ='" . $user_id . "'";
                if ($conn->query($sql) === TRUE) {
        session_start();
        // echo "thành công";
        $_SESSION['success_message'] = "Đã thay đổi thành công";
        header("Location: ../taikhoancuatoi.php");
            exit();
                }
                else echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    elseif ($_POST['action'] == "thongtincanhan") {
        $sql = "UPDATE users SET hoten='$hoten' , ngay_sinh  = '$ngay_sinh', thanhpho = '$thanhpho' ,dia_chi = '$diachi' , gioi_tinh = '$gender' ,tt_honnhan = '$tt_honnhan' ,sdt = '$sdt'   WHERE id ='" . $user_id . "'";
                if ($conn->query($sql) === TRUE) {
                    // echo "thành công" ;
        session_start();
        // echo "thành công";
        $_SESSION['success_message'] = "Đã thay đổi thành công";
        header("Location: ../taikhoancuatoi.php");
            exit();
                }
                else echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    
// }
}


?>