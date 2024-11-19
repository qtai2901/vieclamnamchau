<?php
include "../class.database.php";
global $conn;
// Kiểm tra xem có yêu cầu POST từ biểu mẫu không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem trường action có tồn tại không
    if(isset($_POST['action'])) {
        // Lấy giá trị của trường action
        $action = $_POST['action'];
        $ntd_id = $_POST['ntd_id'];
        // Kiểm tra xem hành động là "update"
        switch($action) {
            case "update_cty":
                $masothue = $_POST['masothue'];
                $name_congty = $_POST['name_congty'];
                $quymonhansu = $_POST['quymonhansu'];
                $continent = $_POST['continent'];
                $country = $_POST['country'];
                $city = $_POST['city'];
                $district = $_POST['district'];
                $company_address = $_POST['company_address'];
                $sdt = $_POST['sdt'];
                $linhvuc = $_POST['linhvuc'];
                // $insert_query = "INSERT INTO nhatuyendung (sdt, name_congty, masothue, quymonhansu, chauluc, quocgia, tinh, huyen, diachi, linhvuc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                 $sql = "UPDATE nhatuyendung SET 
                masothue = '$masothue',
                name_congty = '$name_congty', 
                quymonhansu = '$quymonhansu', 
                chauluc = '$continent', 
                quocgia = '$country', 
                tinh = '$city', 
                huyen = '$district', 
                diachi = '$company_address', 
                sdt = '$sdt', 
                linhvuc = '$linhvuc' 
                WHERE id = '$ntd_id'";
                if ($conn->query($sql) === TRUE) {
            session_start();
        // echo "thành công";
        $_SESSION['success_message'] = "Đã thay đổi thành công";
        header("Location: ../thongtintaikhoan.php");
            exit();
        } else {
            echo "Lỗi: " . $conn->error;
        }
                break;
            case "update_giayphep":
               if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
    // Thư mục đích để lưu trữ tệp
    $targetDir = "../docs/";
    
    // Tên tệp tải lên
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    
    // Di chuyển tệp tải lên đến thư mục đích
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        $sql = "UPDATE nhatuyendung SET `giayphepkd`= '".basename($_FILES["fileToUpload"]["name"])."' WHERE id ='" . $ntd_id . "'";
         if ($conn->query($sql) === TRUE) {
             session_start();
        // echo "thành công";
        $_SESSION['success_message'] = "Đã thay đổi thành công";
        header("Location: ../thongtintaikhoan.php");
            exit();
        }
        
    }
}

                break;
            // Các case khác nếu cần
            default:
                // Hành động mặc định nếu không khớp với các case trên
                break;
        }
        // Xử lý các hành động khác nếu cần
    }
    else {
        // Trường action không tồn tại
        echo "Lỗi: Trường action không tồn tại.";
    }
}
else {
    // Yêu cầu không phải là POST
    echo "Lỗi: Yêu cầu không hợp lệ.";
}
?>
