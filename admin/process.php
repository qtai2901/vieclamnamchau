<?php
include "../class.database.php";
global $conn;
// Kiểm tra xem yêu cầu là phương thức POST và có dữ liệu được gửi không
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action']) && $_POST['action'] === "Duyet" && isset($_POST['id'])) {
    // Xử lý dữ liệu được gửi từ yêu cầu AJAX
    $id = $_POST['id'];

    $sql = "UPDATE tin_tuyen_dung SET trang_thai= 1  WHERE id ='$id'";
        $conn->query($sql);
    $response = array("status" => "2", "msg" => "Duyệt thành công tin có id = $id");
    echo json_encode($response);
} else {
    // Nếu yêu cầu không hợp lệ hoặc không có dữ liệu, trả về thông báo lỗi
    $response = array("status" => "0", "msg" => "Yêu cầu không hợp lệ");
    echo json_encode($response);
}
?>
