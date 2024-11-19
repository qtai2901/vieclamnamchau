<?php
include "../class.database.php";
global $conn;

$uploadOk = 1;

if ($_POST) {
    $ntd_id = $_POST["ntd_id"];
    $hoten = $_POST['hoten'];
    $phone = $_POST['phone'];
    $email_lienhe = $_POST['email_lienhe'];
    $diachi_lienhe = $_POST['diachi_lienhe'];

    // Kiểm tra xem có tệp được tải lên không
    if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        $target_dir = "../imgs/avt/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Kiểm tra kiểu tệp
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
            echo "Xin lỗi, chỉ cho phép tải lên các tệp ảnh JPG, JPEG, PNG & GIF.";
            $uploadOk = 0;
        }

        if ($uploadOk) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $sql = "UPDATE nhatuyendung SET avt='imgs/avt/" . basename($_FILES["fileToUpload"]["name"]) . "', hoten='$hoten', sdt='$phone', email_lienhe='$email_lienhe', diachi_lienhe='$diachi_lienhe' WHERE id ='" . $ntd_id . "'";
                $conn->query($sql);
                 session_start();
                 $_SESSION['success_message'] = "Đã thay đổi thành công";
                header("Location: ../thongtintaikhoan.php");
                exit();
            } else {
                echo "Xin lỗi, đã xảy ra lỗi khi tải lên tệp.";
            }
        }
    } else {
        $sql = "UPDATE nhatuyendung SET hoten='$hoten', sdt='$phone', email_lienhe='$email_lienhe', diachi_lienhe='$diachi_lienhe' WHERE id ='" . $ntd_id . "'";
        $conn->query($sql);
        session_start();
                 $_SESSION['success_message'] = "Đã thay đổi thành công";
        header("Location: ../thongtintaikhoan.php");
        exit();
    }
}
else echo "lỗi";
?>
