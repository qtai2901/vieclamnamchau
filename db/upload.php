<?php
$target_dir = "uploads/"; // Thư mục lưu trữ tệp tải lên
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Kiểm tra nếu tệp đã tồn tại
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Kiểm tra kích thước tệp (giới hạn 5MB)
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Chỉ cho phép một số định dạng tệp nhất định
if($fileType != "txt" && $fileType != "pdf" && $fileType != "docx") {
    echo "Sorry, only TXT, PDF & DOCX files are allowed.";
    $uploadOk = 0;
}

// Kiểm tra xem $uploadOk có bằng 0 không (nghĩa là có lỗi)
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// Nếu mọi thứ đều ổn, cố gắng tải tệp lên
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
