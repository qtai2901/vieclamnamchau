<?php
include "../class.database.php";
global $conn;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];
    $ntd_id = $_POST["ntd_id"];
    $continent = $_POST["continent"];
    $country = $_POST["country"];
    $tieude = $_POST["tieude"];
    $gioithieu = $_POST["gioithieu"];
    $tenminhhoa = $_POST["tenminhhoa"];
    $doanket = $_POST["doanket"];

    // Gather all the inputs for "Mục số" and "Tên hình ảnh"
    $mucs = [];
    $tens = [];
    for ($i = 1; $i <= 5; $i++) {
        $mucs[$i] = $_POST["mucso$i"];
        $tens[$i] = $_POST["tenanh$i"];
    }

    if ($action == 'dangkyxkld' || $action == 'luuxkld') {
        // Set the upload directory
        $uploadDir = '../image/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Process uploaded files
        $imagePaths = [];
        if (!empty($_FILES["images"]["name"][0])) {
            $total_files = count($_FILES["images"]["name"]);
            for ($key = 0; $key < $total_files; $key++) {
                if ($_FILES["images"]["error"][$key] == 0) {
                    $image_name = $_FILES["images"]["name"][$key];
                    $image_tmp_name = $_FILES["images"]["tmp_name"][$key];
                    $destination = $uploadDir . basename($image_name);
                    if (move_uploaded_file($image_tmp_name, $destination)) {
                        $imagePaths[] = $destination;
                        $imageNames[] = $image_name; // Lưu tên tệp ảnh
                        // echo "Image uploaded successfully: " . $image_name . "<br>";
                    } else {
                        // echo "Failed to upload image: " . $image_name . "<br>";
                    }
                }
            }
        }

        // Assign image paths to individual variables
        $anhminhoa = isset($imageNames[0]) ? $imageNames[0] : NULL;;
        $anhminhhoa1 = $imageNames[1] ?? NULL;
        $anhminhhoa2 = $imageNames[2] ?? NULL;
        $anhminhhoa3 = $imageNames[3] ?? NULL;
        $anhminhhoa4 = $imageNames[4] ?? NULL;
        $anhminhhoa5 = $imageNames[5] ?? NULL;

        // Insert data into database
        $stmt = $conn->prepare("INSERT INTO xkld (chauluc, quocgia, tieude, gioithieu, anhminhhoa, tenminhhoa, mucso1, anhminhhoa1, tenanh1, mucso2, anhminhhoa2, tenanh2, mucso3, anhminhhoa3, tenanh3, mucso4, anhminhhoa4, tenanh4, mucso5, anhminhhoa5, tenanh5, doanket) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters
        $stmt->bind_param(
            'ssssssssssssssssssssss',
            $continent,
            $country,
            $tieude,
            $gioithieu,
            $anhminhoa,
            $tenminhhoa,
            $mucs[1],
            $anhminhhoa1,
            $tens[1],
            $mucs[2],
            $anhminhhoa2,
            $tens[2],
            $mucs[3],
            $anhminhhoa3,
            $tens[3],
            $mucs[4],
            $anhminhhoa4,
            $tens[4],
            $mucs[5],
            $anhminhhoa5,
            $tens[5],
            $doanket
        );

        // Execute statement
        if ($stmt->execute()) {
          session_start();
        // // echo "thành công";
        // echo $stmt->execute();
        $_SESSION['success_message'] = "Đã lưu thành công";
        header("Location: ../taotinxkld.php");
            exit();
                // }
                // else echo "Lỗi: " . $sql . "<br>" . $conn->error;
        } else {
            echo "Error inserting record: " . $stmt->error;
        }

        $stmt->close();
    } elseif ($action == 'xoaxkld') {
        // Code to handle delete operation
    } else {
        echo "Action: Unknown<br>";
    }
}
?>
