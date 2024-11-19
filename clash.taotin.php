<?php
include "class.database.php";
global $conn;
// session_start();
// Kiểm tra xem form đã được gửi chưa
if ($_POST) {
    // Lấy dữ liệu từ form
    $ntd_id = $_POST["ntd_id"];
    $ten_cty = $_POST['ten_cty'];
    $loai_tin = $_POST['loai_tin'];
    $chuc_danh = $_POST["chuc_danh"];
    $nghe_nghiep = $_POST["nghe_nghiep"];
    $bang_cap = $_POST['bang_cap'];
    $hinh_thuc_lam_viec = $_POST["hinh_thuc_lam_viec"];
    
    $cap_bac = $_POST["cap_bac"];
    $kinh_nghiem = $_POST["kinh_nghiem"];
    $do_tuoi_toi_thieu = $_POST["do_tuoi_toi_thieu"];
    $do_tuoi_toi_da = $_POST["do_tuoi_toi_da"];
    $yeu_cau_gioi_tinh = $_POST["yeu_cau_gioi_tinh"];
    $so_luong_tuyen = $_POST["so_luong_tuyen"];
    $thoi_han_thu_viec = $_POST["thoi_han_thu_viec"];
    $han_nop_ho_so = date("Y-m-d", strtotime($_POST["han_nop_ho_so"]));

    $chau_luc = $_POST["chau_luc"];
    $quoc_gia = $_POST["quoc_gia"];
    $thanh_pho = $_POST['thanh_pho'];
    $quan = $_POST['quan'];
    $so_nha = $_POST['so_nha'];
    $don_vi_tien_te = $_POST['don_vi_tien_te'];
    $luong_toi_thieu = $_POST['luong_toi_thieu'];
    $luong_toi_da = $_POST['luong_toi_da'];
    $ky_nang_can_thiet = $_POST['ky_nang_can_thiet'];
    $mo_ta_cong_viec = $_POST['mo_ta_cong_viec'];
    $yeu_cau_cong_viec = $_POST['yeu_cau_cong_viec'];
    $mo_ta_quyen_loi = $_POST['mo_ta_quyen_loi'];
    $hoten_lienhe = $_POST['hoten_lienhe'];
    $email_lienhe = $_POST['email_lienhe'];
    $sdt_lienhe = $_POST['sdt_lienhe'];
    $diachi_lienhe = $_POST['diachi_lienhe'];
    
    
   $sql = "INSERT INTO tin_tuyen_dung (ntd_id,dich_vu_id ,chuc_danh, nghe_nghiep, hinh_thuc_lam_viec,bang_cap, kinh_nghiem, cap_bac, do_tuoi_toi_thieu, do_tuoi_toi_da, yeu_cau_gioi_tinh, so_luong_tuyen, thoi_han_thu_viec, han_nop_ho_so, chau_luc, quoc_gia, thanh_pho, quan, so_nha, don_vi_tien_te, luong_toi_thieu, luong_toi_da, ky_nang_can_thiet, mo_ta_cong_viec, yeu_cau_cong_viec, mo_ta_quyen_loi, hoten_lienhe, email_lienhe, sdt_lienhe, diachi_lienhe, ten_cty)
    VALUES ('$ntd_id','$loai_tin','$chuc_danh', '$nghe_nghiep', '$hinh_thuc_lam_viec', '$bang_cap', '$kinh_nghiem','$cap_bac', '$do_tuoi_toi_thieu', '$do_tuoi_toi_da', '$yeu_cau_gioi_tinh', '$so_luong_tuyen', '$thoi_han_thu_viec', '$han_nop_ho_so', '$chau_luc', '$quoc_gia', '$thanh_pho', '$quan', '$so_nha', '$don_vi_tien_te', '$luong_toi_thieu', '$luong_toi_da', '$ky_nang_can_thiet', '$mo_ta_cong_viec', '$yeu_cau_cong_viec', '$mo_ta_quyen_loi', '$hoten_lienhe', '$email_lienhe', '$sdt_lienhe', '$diachi_lienhe', '$ten_cty')";

    // Thực thi câu lệnh SQL
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['success_message'] = "Đã thêm tin thành công";
        header("Location: taotintuyendung.php");
            exit();
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    
    

}
?>