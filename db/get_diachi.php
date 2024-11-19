<?php
include "../class.database.php";
global $conn;

// Kiểm tra xem có giá trị continent_id hoặc country_id được gửi từ phía client hay không
if(isset($_GET['continent_id'])) {
    // Lấy continent_id từ yêu cầu
    $continent_id = $_GET['continent_id'];

    // Truy vấn SQL để lấy danh sách quốc gia dựa trên continent_id
    $sql = "SELECT * FROM countries WHERE continent_id = $continent_id";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có kết quả trả về hay không
    if (mysqli_num_rows($result) > 0) {
        // Định dạng dữ liệu thành HTML để gửi lại phía client
        while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
    } else {
        echo '<option value="">Không có quốc gia nào</option>';
    }
} elseif(isset($_GET['country_id'])) {
    // Lấy country_id từ yêu cầu
    $country_id = $_GET['country_id'];

    // Truy vấn SQL để lấy danh sách thành phố dựa trên country_id
    $sql = "SELECT * FROM cities WHERE country_id = $country_id";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có kết quả trả về hay không
    if (mysqli_num_rows($result) > 0) {
        // Định dạng dữ liệu thành HTML để gửi lại phía client
        while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
    } else {
        echo '<option value="">Không có thành phố nào</option>';
    }
}elseif(isset($_GET['city_id'])) {
    // Lấy country_id từ yêu cầu
    $city_id = $_GET['city_id'];

    // Truy vấn SQL để lấy danh sách thành phố dựa trên country_id
    $sql = "SELECT * FROM districts WHERE city_id = $city_id";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có kết quả trả về hay không
    if (mysqli_num_rows($result) > 0) {
        // Định dạng dữ liệu thành HTML để gửi lại phía client
        while($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
    } else {
        echo '<option value="">Không có quận nào</option>';
    }
}
?>
