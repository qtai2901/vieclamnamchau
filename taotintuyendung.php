<?php include "sesion_ntd.php"?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="description"  content="text/html; charset=utf-8;" http-equiv="Content-Type" >
      <meta content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--<link type="image/x-icon" href="https://vietnamtravel.net.vn/favicon.ico" rel="shortcut icon" />-->
      <title> Việc Làm Tại Năm Châu </title>
     
      <meta name="author" content="">
      <meta property="og:site_name" 	content="" />
      <meta property="og:image" 		content=""/>
      <meta property="og:title" 	  	content="" />
      <meta property="og:description" content="Việc làm 5 châu" />
      <meta property="og:url" 		content="" />
      <meta property="og:type" 		content="website" />


      <link href="css/jquery-ui.min.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/menu-mobile.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link href="css/slider.css" rel="stylesheet" type="text/css">
      <link href="css/main.css" rel="stylesheet">
       <link href="css/taotin.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha384-2WNw8ovEXLezUJrT4n0Ry1Ye1K8gAdBHA0y1rQip2O5rG5m41WdbC0J6TwCp8gqV" crossorigin="anonymous">

      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-nr4lQo2GcX1MCfjxuFrP6YdsHk9eT6eJiITjpsPoTgW1Jh2tVDw/+qWtIe8aWdfHx7rS2ftFcEgsjZcdZpwfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
      <script src="js/jquery-1.11.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
     
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js" type="text/javascript"></script>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <!-- Js menu mobile-->
      <script>
         $(document).ready(function(e) {
             $(".arrown_menu_accordion").click(function() {
                 var val=$(this).attr("val");
                 $("#"+val).toggle();
             });
         });
      </script> 				
      <script src="js/frame_script.js"></script>
      <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
      <script type="text/javascript">
         $(window).load(function() {
             $('#slider').nivoSlider();
         });
      </script>
      <script>
        window.onload = function() {
            <?php
            // Kiểm tra xem có thông báo thành công trong session không
            if(isset($_SESSION['success_message'])) {
                // Hiển thị thông báo trong popup
                echo 'alert("' . $_SESSION['success_message'] . '");';
                // Xóa thông báo sau khi đã hiển thị
                unset($_SESSION['success_message']);
            }
            ?>
        }
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
      <script type="application/ld+json">
         "@context" : "https://schema.org/"
      </script>
      <script type="application/ld+json">
         {
             "@context": "http:\/\/schema.org",
             "@type": "LocalBusiness",
             "name": "Spatie",
             "email": "info@spatie.be",
             "contactPoint": {
                 "@type": "ContactPoint",
                 "areaServed": "Worldwide"
             }
         }
      </script>
      <script type="text/javascript">
         jQuery(document).ready(function () {
         	$(".owl-carousel5").owlCarousel({
         		pagination: false,
         		navigation: true,
         		items: 2,
         		autoPlay:true,
         		slideMargin:10,
         		addClassActive: true,
         		itemsCustom : [
         			[0, 1],
         			[320, 1],
         			[480, 1],
         			[660, 2],
         			[700, 2],
         			[768, 2],
         			[992, 2],
         			[1024, 2],
         			[1200, 2],
         			[1400, 2],
         			[1600, 2]
         		]
         	});
         });
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128213416-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'UA-128213416-1');
         gtag('config', 'AW-882166916');
                   gtag('config', 'AW-963923892');
         
      </script>
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <script>
         (adsbygoogle = window.adsbygoogle || []).push({
           google_ad_client: "ca-pub-6019637857371569",
           enable_page_level_ads: true
         });
      </script>
      
   </head>
   <body>
      <script>
         window.fbAsyncInit = function() {
           FB.init({
             appId            : '238563550019858',
             autoLogAppEvents : true,
             xfbml            : true,
             version          : 'v2.12'
           });
         };
         (function(d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = "https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
      </script>
      <?php include "header.php" ?>


                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom">
            <a class="icon_menu_mobile" href="javascript:void(0)" val="0" rel="nofollow"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-xs-12 box-mainmenu">
                     <nav class="menunav">
                        <ul class="ulwap-mainmenu">
                           <li><a href="index.php" class="mn-home"><i class="fa fa-home"></i></a></li>
                           <li class="megamenusub" >
                              <a href="index.php" class=" 'active' ">
                              Trang Chú
                              </a>
                           
                           </li>
                           <li class="megamenusub" >
                              <a href="danhsachtatcanghe.php" class=" 'active' ">
                             Việc Làm
                              </a>
                             
                           </li>
                           <li class="" >
                              <a href="duhocnghe.php" class=" 'active' ">
                            Du Học Nghề
                              </a>
                           
                           </li>
                           
                           <li class="" >
                              <a href="xuatkhaulaodong.php" class=" 'active' ">
                              Xuất Khẩu Lao Động
                              <img alt="du lịch" class="icon-posmenu" src="imgs/icon-news.gif">                                                </a>
                              
                           </li>
                           <li class="" >
                              <a href="dichvu.php" class="">
                             Dịch Vụ
                              </a>
                           </li>
                           <li class="" >
                              <a href="tintuc.php" class=" 'active' ">
                              Tin Tức 
                              </a>
                             
                           </li>
                           <li class="" >
                              <a href="lienhe.php" class="">
                             Liên Hệ
                              </a>
                           </li>
                        </ul>
                       
                     </nav>
                     <div class="line-menu"></div>
                  </div>
                  
               </div>
               
            </div>
          
         </div>
      </header>






      
      <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="css/light.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="css/dark.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="css/bar.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    
      <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
      <script type="text/javascript">
         $(window).load(function() {
             $('#slider-master').nivoSlider({
                 controlNav : false,
             });
         });
      </script>
      <style>
         #chose-option-diemden-nd.hidden-select, #chose-option-diemden-qt.hidden-select, #chose-option-diemden-empty.hidden-select {
         display: none;
         }
         #chose-option-diemden-nd.show-select, #chose-option-diemden-qt.show-select, #chose-option-diemden-empty.show-select {
         display: inline;
         }
      </style>


<div class="menu-container">

   
        <div class="menu4">



        <button class="buttonn" onclick="toggleButtons(this)"><i class="fa fa-angle-down" aria-hidden="true"></i> <strong>Quản lý đăng tuyển</strong> </button>


            <form id ="forma1">

            <button class="createBtn" onclick=""><a href="taotintuyendung.php" style="color: black;"><i class="fa fa-plus-square" aria-hidden="true"></i> Tạo tin tuyển dụng </button>
            
           <button class="createBtn" onclick=""><a href="danhsachtin.php" style="color: black;">
               <i class="fa fa-file-text" aria-hidden="true">
               </i> 
               Danh sách tin đăng</a>
            </button>

          

      


        <button class="buttonn1" onclick="toggleButtons1(this)"><i class="fa fa-angle-down" aria-hidden="true"></i> <strong>Quản lý ứng viên </strong></button>


           <form id ="formb1">

            <button class="createBtn1" onclick="toggleForms1(this)"><a href="hosoungtuyen.php" style="color: black;"><i class="fa fa-plus-square" aria-hidden="true"></i> Hồ sơ ứng tuyển</a></button>
            

<button class="listBtn1" onclick="toggleForms1(this)"><a href="hosodaluu.php" style="color: black;"><i class="fa fa-heart" aria-hidden="true"></i></i> Hồ sơ đã lưu</a></button>
          
          </form>


          <button class="buttonn2" onclick="toggleButtons2(this)"><i class="fa fa-angle-down" aria-hidden="true"></i><strong> Quản lý dịch vụ</strong></button>


<form id ="formb2">

 <button class="createBtn2" onclick="toggleForms2(this)"><a href="danhsachdonhang.php" style="color: black;"><i class="fa fa-plus-square" aria-hidden="true"></i> Danh sách đơn hàng  </a> </button>

 <button class="listBtn2" onclick="toggleForms2(this)"><i class="fa fa-heart" aria-hidden="true"></i></i> Lịch sử kích hoạt </button>
 <button class="listBtnn2" onclick="toggleForms2(this)"><i class="fa fa-search" aria-hidden="true"></i> Dịch vụ của tôi</button>
  <button class="listBtnn2" onclick="toggleForms2(this)"><a href="lichsudonhang.php" style="color: black;"><i class="fa fa-search" aria-hidden="true"></i> Lịch sử đơn hàng </a></button>
 <button class="listBtnn2" onclick="toggleForms2(this)"><a href="thongtinthanhtoan.php" style="color: black;"><i class="fa fa-search" aria-hidden="true"></i> Thông tin thanh toán </a> </button>
</form>

<button class="buttonn3" onclick="toggleButtons3(this)"><i class="fa fa-angle-down" aria-hidden="true"></i><strong> Tài khoản và thương hiệu</strong></button>


<form id ="formb3">

 <button class="createBtn3" onclick="toggleForms3(this)"><a href="thongtintaikhoan.php" style="color: black;"><i class="fa fa-plus-square" aria-hidden="true"></i> Tài khoản nhà tuyển dụng </a></button>

<button class="listBtn3" onclick="toggleForms3(this)"><a href="quangba.php" style="color: black;"><i class="fa fa-heart" aria-hidden="true"></i></i> Quảng bá thương hiệu </a></button>

</form>


        </div>
        <div class="menu5">
        <form id ="forma2" action="clash.taotin.php" method="post">
            <? $name_congty = get_list("SELECT * FROM `nhatuyendung` WHERE `id` = '" . $ntd_id . "'", $conn)[0]['name_congty'];?>
            <h2 style = " color: #5882FA;"> Tạo tin tuyển dụng</h2>
            <input type="hidden" name="ntd_id" value="<?php echo $ntd_id?>"></input>
            <!--<input type="hidden" name="ntd_id" value="<?php echo $ntd_id?>"></input>-->
            <input type="hidden" name="ten_cty" value="<?php echo $name_congty ?>"></input>
            <h4 style = "margin-top: 40px; color: black;"> Thông tin cơ bản</h4>
            <h4 style = "margin-top: 40px; color: black;">Loại Tin</h4>
             <select class="form-control show-select" id="chose-option-nganh-empty" name="loai_tin">
    <?php foreach (get_list("SELECT * FROM `dich_vu`",$conn) as $row) { 
            
           echo '<option value="' .  $row['id']  . '">' . $row['ten_dich_vu'] . '</option>';} ?>
</select>
            <h4 style = "margin-top: 40px; color: black;"> Chức danh <span class="red-star">*</span> <span class="kiemduyet">Thông tin này không thể chỉnh sửa sau 72 giờ kiểm duyệt</span></h4>
            <input type="text" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Vị trí hiển thị ứng tuyển" name="chuc_danh">
            <h4 style = "margin-top: 40px; color: black;">Nghề Nghiệp <span class="red-star">*</span> </h4>
   
           
            <select class="form-control show-select" id="chose-option-nganh-empty" name="nghe_nghiep">
    <?php 
    $nghenghiep = json_decode(file_get_contents("nghenghiep.json"), true);
    foreach ($nghenghiep as $id => $nghe) {
        echo '<option value="' . $id . '">' . $nghe . '</option>';
    }
    ?>
</select>

    <h4 style = "margin-top: 40px; color: black;">Hình thức làm việc <span class="re">*</span> 

    <span class="re1">Bằng Cấp</span> 
    <span class="re">*</span> 
    <span class="re1">Kinh Nghiệm</span> 
    <span class="re">*</span> 





    </h4>
    <div class="col-dk-3 col-md-4 col-xs-12 ">
    <select class="form-control show-select" id="chose-option-hinhthu-empty" name="hinh_thuc_lam_viec">
          
          <option value="">Chọn </option>
          <option value="Part-time">Part-time </option>
          <option value="Full-time">Full-time</option>
          </select>
          </div>
          <div class="col-dk-3 col-md-4 col-xs-12 ">
    <select class="form-control show-select" id="chose-option-bangcap-empty" name="bang_cap">
          
          <option value="">Chọn </option>
          <option value="trung hoc">Trung Học </option>
          <option value="trung cap">Trung Cấp </option>
          <option value="cao dang">Cao Đẳng </option>
          <option value="dai hoc">Đại Học </option>
          <option value="thac si">Thạc Sĩ </option>
          <option value="tien si">Tiến Sĩ </option>
          </select>
          </div>
          <div class="col-dk-3 col-md-4 col-xs-12 ">
    <select class="form-control show-select" id="chose-option-kinhnghiem-empty" name="kinh_nghiem">
          
          <option value="">Chọn </option>
          <option value="khongkinhnghiem">Không kinh nghiệm </option>
          <option value="1nam">Dưới 1 năm </option>
          <option value="1-2nam">Từ 1 đến 2 năm</option>
          <option value="2-4nam">Từ 2 đến 4 năm</option>
          <option value="5-10nam">Từ 5 đến 10 năm</option>
          <option value="tren 10 nam">Trên 10 năm</option>
          </select>
          </div>


          <h4 style = "margin-top: 100px; color: black;">Cấp bậc <span class="re5">*</span> 

    <span class="re4">Độ tuổi tối thiểu</span> 
    <span class="re3">Độ tuổi tối đa</span> 
    <span class="re1">Yêu cầu giới tính</span> 
    <span class="re2">*</span> 





    </h4>
    <div class="col-dk-3 col-md-4 col-xs-12 ">
    <select class="form-control show-select" id="chose-option-capbat-empty" name="cap_bac">
          
          <option value="">Chọn </option>
          <option value="Thực Tập Sinh">Thực Tập Sinh</option>
          <option value="Nhân Viên">Nhân Viên</option>
          <option value="Phó Phòng">Phó Phòng</option>
          <option value="Trưởng Phòng">Trường Phòng</option>
          <option value="Phó Giám Đốc">Phó Giám Đốc</option>
          <option value="Giám Đốc">Giám Đốc</option>
          <option value="Tông Giám Đốc">Tổng Giám Đốc</option>
         
          </select>
          </div>
          <div class="col-dk-4 col-md-4 col-xs-12 ">
          <div class="col-dk-5 col-md-6 col-xs-12 ">
    <select class="form-control show-select" id="chose-option-tuoitoithieu-empty" name="do_tuoi_toi_thieu">
          
          <?php 
    $do_tuoi = json_decode(file_get_contents("tuoi.json"), true);
    foreach ($do_tuoi as $tuoi => $mota) {
        echo '<option value="' . $tuoi . '">' . $mota . '</option>';
    }
    ?>

          </select>
          </div>
          
          <div class="col-dk-5 col-md-6 col-xs-12 ">
        
             
    <select class="form-control show-select" id="chose-option-tuoitoida-empty"  name="do_tuoi_toi_da">
          
    <?php 
    $do_tuoi = json_decode(file_get_contents("tuoi.json"), true);
    foreach ($do_tuoi as $tuoi => $mota) {
        echo '<option value="' . $tuoi . '">' . $mota . '</option>';
    }
    ?>
          </select>
       
          </div>
        </div>
          <div class="col-dk-3 col-md-4 col-xs-12 ">
    <select class="form-control show-select" id="chose-option-gioitinh-empty" name="yeu_cau_gioi_tinh">
          
          <option value="">Chọn </option>
          <option value="Nam">Nam </option>
          <option value="Nu">Nữ</option>
          <option value="Nam_nu">Cả Nam và Nữ</option>
          
          </select>
          </div>
        
          <h4 style = "margin-top: 100px; color: black;">Số lượng tuyển <span class="re">*</span> 

             <span class="re4" style =" margin-right: 200px;" >Thời hạn thử việc</span> 

             <span class="re1">Hạn nộp hồ sơ</span> 
             <span class="re2">*</span> 
         </h4>
         <div class="col-dk-3 col-md-4 col-xs-12 ">
         <input type="text" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Chỉ nhập số. VD:10" name="so_luong_tuyen">
          </div>
          <div class="col-dk-3 col-md-4 col-xs-12 ">
         
          <div class="input-with-addon">
  <input type="text" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Chỉ nhập số. VD: 1.5 hoặc 2" name="thoi_han_thu_viec">
  <span class="input-addon">Tháng</span>
</div>

          
        
</div>
          
          <div class="col-dk-3 col-md-4 col-xs-12 ">
        
          <div class="submission-deadline">

 <input type="date" id="deadline-date" class="extended-input" name="han_nop_ho_so" required>
</div>
  
 
       
       </div>

     <h3 style = "margin-top: 100px; color: black;">Địa chỉ làm việc</h3>

       <div class="gray-diachi-form" >
      <h4> <i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ 1</h4>
      <div class="horizontal-line"></div>
      <h4 style = "margin-top: 40px; color: black;margin-left: 30px;">Châu lục <span class="re"style = "margin-right: 230px; ">*</span> 

<span class="re1">Quốc gia</span> 
<span class="re"style = "margin-right: 230px; ">*</span> 
<span class="re1">Tỉnh / Thành phố / Bang</span> 
<span class="re4" style = "color: red;">*</span> 





   </h4>
   <div class="col-dk-3 col-md-4 col-xs-12 " style = "margin-top: 20px; ">
    <select class="form-control show-select" id="chose-option-nganh-empty" name="chau_luc" onchange="getCountryList(this.value)">
          
          <option value="">Chọn Châu Lục</option>
          <?php foreach (get_list("SELECT * FROM `continents`",$conn) as $row) { 
            
           echo '<option value="' .  $row['id']  . '">' . $row['name'] . '</option>';} ?>
          <!--<option value="Chau_A">Châu Á</option>-->
         
          </select>
          </div>
          <div class="col-dk-3 col-md-4 col-xs-12 " style = "margin-top: 20px; ">
    <select class="form-control show-select" id="chose-option-quocgia-empty" name="quoc_gia" onchange="getCityList(this.value)">
          
          <option value="">Chọn Quốc Gia </option>
          
    
        
          </select>
          </div>
          <div class="col-dk-3 col-md-4 col-xs-12 "style = "margin-top: 20px; ">
    <select class="form-control show-select" id="chose-option-thanhpho-empty" name="thanh_pho" onchange="getDistrictList(this.value)">
          
          <option value="">Chọn Tỉnh / Thành Phố / Bang</option>
         
          </select>
          </div>

          <h4 style = "margin-top: 140px; color: black;margin-left: 30px;"> Quận / Huyện / Hạt <span class="re"style =" margin-right: 150px;" >*</span> 

<span class="re1">Số nhà , tên đường</span> 
   </h4>
   <div class="col-dk-3 col-md-4 col-xs-12 " style = "margin-top: 20px; ">
    <select class="form-control show-select" id="chose-option-quan-empty" name="quan">
          
          <option value="">Chọn Quận / Huyện / Hạt</option>
          </select>
          </div>
          <div class="col-dk-7 col-md-8 col-xs-12 "style = "margin-top: 20px; ">
         <input type="text" class="form-control show-select" id="chose-option-diemden-empty" placeholder="VD:123 Lê Đức Thọ , Quận Cầu Giấy (tên đường cần ngắn hơn 200 kí tự)"maxlength="200" name="so_nha">
          </div>
          <hr class="horizontal-line">
          
    </div>
    <div style = "margin-top: 20px; ">
    <a href="" > <i class="fa fa-plus" aria-hidden="true"></i> Thêm địa chỉ làm việc <span style = " color : black;"> tối đa 10 địa điểm </span></a>
    </div>
    <h3 style = "margin-top: 50px; color: black;"> Mức Lương & Kỹ Năng</h3>
    <div class="col-dk-2 col-md-3 col-xs-12 "style = "margin-top: 20px; ">
    <h4>Đơn vị tiền tệ :</h4>
    </div>
    <div class="col-dk-2 col-md-9 col-xs-12 "style = "margin-top: 20px; ">
    <select class="form-control show-select" id="chose-option-nganh-empty" name="don_vi_tien_te">
          
          <option value="VND">VND</option>
          <option value="USD">USD</option>
         
          </select>
    </div>
    <h4 style = "margin-top: 140px; color: black;margin-left: 30px;"> Mức lương tối thiểu <span class="re"style =" margin-right: 300px;" >*</span> 

<span class="re1"> Mức lương tối đa</span> 
<span class="re"style =" margin-right: 150px;" >*</span> 
   </h4>
   <div class="col-dk-4 col-md-5 col-xs-12 "style = "margin-top: 20px; ">
         <input type="text" class="form-control show-select" id="chose-option-minluong-empty" placeholder="Chỉ nhập số. VD: 10.000.000"maxlength="200" name="luong_toi_thieu">
        
          </div>

          <div class="col-dk-1 col-md-1 col-xs-12 "style = "margin-top: 20px;margin-left: 20px; ">
          <span>---</span>
          </div>

          <div class="col-dk-4 col-md-5 col-xs-12 "style = "margin-top: 20px; ">
         <input type="text" class="form-control show-select" id="chose-option-maxluong-empty" placeholder="Chỉ nhập số. VD: 10.000.000"maxlength="200" name="luong_toi_da">
          </div>
          <div class="col-dk-12 col-md-12 col-xs-12 "style = "margin-top: 30px; ">
          <h4 style = "margin-top: 20px; color: black;">Nhập kỹ năng cần thiết (Không bắt buộc) </h4>
          <input type="text" class="form-control show-select" id="chose-option-kynang-empty"style = "margin-top: 30px; " placeholder="Nhập kỹ năng cần thiết cho vị trí này"maxlength="200" name="ky_nang_can_thiet">
          </div>
          <div style = "margin-top: 250px; color: black;">

<h3 > Mô tả công việc</h3>
<h5 > Mô tả công việc<span class="re" >*</span> </h5>

<h5 style="color: #999;" > Thông tin cho vị trí công việc yêu cầu , trách nhiệm mà ứng viên có thể đảm nhận khi làm việc ở công ty </h5>
<textarea id="mo_ta_cong_viec" name="mo_ta_cong_viec" rows="8"  ></textarea>
<div style = "margin-top: 20px; ">
    <a href="" > <i class="fa fa-magic" aria-hidden="true"></i> Xem gợi ý mô tả công việc </a>
    </div>
    <h5 > Yêu cầu công việc<span class="re" >*</span> </h5>
    <h5 style="color: #999;" > Kỹ năng chuyên môn hoặc kỹ năng mềm cần thiết với công việc mà ứng viên cần quan tâm </h5>
    <textarea id="yeu_cau_cong_viec" name="yeu_cau_cong_viec"></textarea>
<div style = "margin-top: 20px; ">
    <a href="" > <i class="fa fa-magic" aria-hidden="true"></i> Xem gợi ý yêu cầu công việc </a>
    </div>
<h5 > Mô tả quyền lợi<span class="re" >*</span> </h5>
    <h5 style="color: #999;" > Những quyền lợi , lợi ít với công việc cho ứng viên với vị trí ứng tuyển </h5>
    <textarea id="mo_ta_quyen_loi"name="mo_ta_quyen_loi"></textarea>
<div style = "margin-top: 20px; ">
    <a href="" > <i class="fa fa-magic" aria-hidden="true"></i> Xem gợi ý quyền lợi  </a>
    </div>

</div>


<h3 > Thông tin người liên hệ</h3>
<h4 style = "margin-top: 40px; color: black;margin-left: 30px;">Họ và tên <span class="re"style = "margin-right: 230px; ">*</span> 

<span class="re1">Email</span> 
<span class="re"style = "margin-right: 270px; ">*</span> 
<span class="re1">Điện thoại</span> 
<span class="re4" style = "color: red;">*</span> 





   </h4>
   <div class="col-dk-3 col-md-4 col-xs-12 "style = "margin-top: 20px; ">
         <input type="text" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Nguyen van A"maxlength="200" name="hoten_lienhe">
          </div>
          <div class="col-dk-3 col-md-4 col-xs-12 "style = "margin-top: 20px; ">
         <input type="text" class="form-control show-select" id="chose-option-diemden-empty" placeholder="nguyenvana@gmail.com"maxlength="200" name="email_lienhe">
          </div>
          <div class="col-dk-3 col-md-4 col-xs-12 "style = "margin-top: 20px; ">
         <input type="text" class="form-control show-select" id="chose-option-diemden-empty" placeholder="09 9999 9999"maxlength="200"name="sdt_lienhe">
          </div>
          <div style = "margin-top: 80px;margin-left: 700px; ">
    <a href="" >  Thêm số điện thoại  </a>

    </div>
    <h4 style = "margin-top: 40px; color: black;margin-left: 30px;"> Địa chỉ liên hệ <span class="re"style = "margin-right: 230px; ">*</span> 
   </h4>
         <div class="col-dk-11 col-md-12 col-xs-12 "style = "margin-top: 20px; ">
         <input type="text" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Số 68 Nguyễn Du , Hai Bà Trưng , Hà Nội"maxlength="200" name="diachi_lienhe">
          </div>


          <label class="checkbox-container" style = "margin-top: 120px; margin-left: 20px;">
  <input type="checkbox">
  <span class="checkmark"></span>
  <span class="terms"> Bằng việc tạo tin tuyển dụng , bạn xác nhận động ý với <u>điều khoản và điều kiện</u> sử dụng với vieclamtainamchau.com </span>
</label>
<hr class="horizontal-line">


<div class="button-container1" style = "margin-top: 40px; margin-left:550px;">

<button class="xemtruoc" style="background-color: #E3CEF6;color: #8a2be2;width: 200px; height: 50px;">Xem Trước</button>
  <button type="submit" class="tieptuc" style="background-color: #8a2be2;color: #fff;width: 200px; height: 50px;">Tiếp Tục</button>
</div> 


 </div>




        </form>
        <form id ="formdanhsach">
            <h2 style="display: none; ">Danh Sách</h2>

        </form>


        </div>
       
        

   
       




    </div>
    <div id="footer" class="footer w100 fl top-20">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12">
                  <div class="row">
                     <div class="col-md-3 col-xs-12">
                        <div class="w100 fl tit-child-larg">
                           <h2 class="h2titfoot not-icon">Trang Chủ </h2>
                        </div>
                        <ul class="ulfooter-contact">
                           
                           <li><i class="fa fa-phone"></i> Liên Hệ Quảng Cáo</li>
                           <li><i class="fa fa-map-marker"></i> Về Chúng Tôi</li>
                           <li><i class="fa fa-fax"></i> Bảng Giá Dịch Vụ</li>
                           
                        </ul>
                       
                     </div>
                     <div class="col-md-3 col-xs-12">
                        <div class="w100 fl tit-child-larg">
                           <h2 class="h2titfoot not-icon">Hỏi Đáp</h2>
                        </div>
                       
                         
                              <ul class="ulfooter-contact w50">
                                 <li><i class="fa fa-map-marker"></i> Góp ý</li>
                                 <li><i class="fa fa-phone"></i> Gửi Câu Hỏi</li>
                                 <li><i class="fa fa-fax"></i> Câu Hỏi Thường Gặp</li>
                                 
                              </ul>
                             
                           </div>
                           <div class="col-md-3 col-xs-12">
                        <div class="w100 fl tit-child-larg">
                           <h2 class="h2titfoot not-icon">Hổ Trợ</h2>
                        </div>
                        <ul class="ulfooter-contact">
                           
                           <li><i class="fa fa-phone"></i> Đăng Tin Miễn Phí</li>
                           <li><i class="fa fa-map-marker"></i> Quy Định Đăng Tin</li>
                           <li><i class="fa fa-fax"></i> Hướng Dẫn Dăng Tin</li>
                           
                        </ul>
                       
                     </div>
                     <div class="col-md-3 col-xs-12">
                        <div class="w100 fl tit-child-larg">
                           <h2 class="h2titfoot not-icon">Ngôn Ngữ</h2>
                        </div>
                        <ul class="ulfooter-contact">
                           
                           <li> Tiếng Việt       &#8744;</li>
                           
                           
                        </ul>
                       
                     </div>
                     <div class="col-md-3 col-xs-12">
                  <div class="w100 fl">
                     <div class="w100 fl tit-child-larg">
                        <h2 class="h2titfoot not-icon">Kết nối với chúng tôi</h2>
                     </div>
                     <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61558665243285&is_tour_dismissed" data-small-header="false" data-adapt-container-width="true"  data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                        <div class="fb-xfbml-parse-ignore">
                           <blockquote cite="https://www.facebook.com/profile.php?id=61558665243285&is_tour_dismissed"><a href="https://www.facebook.com/profile.php?id=61558665243285&is_tour_dismissed">Việc Làm 5 Châu</a></blockquote>
                        </div>
                     </div>
                     <div class="clear"></div>
                     <ul class="ullstsocial">
                        <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                  </div>
                        </div>
                     </div>
                     <div id="footer" class="footer w100 fl top-20">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-xs-12">
                  <div class="row">
                     <div class="col-md-6 col-xs-12">
                        <div class="w100 fl tit-child-larg">
                           <h2 class="h2titfoot not-icon">Hổ Trợ Kỹ Thuật</h2>
                        </div>
                      
                              <ul class="ulfooter-contact w50">
                              <li><i class="fa fa-phone"></i> Quốc Duy : 0397916717 </li>
                              <li><i class="fa fa-map-marker"></i> Support@Vieclam5chau.com</li>
                              <li><i class="fa fa-fax"></i> Vieclam5chau@gmail.com</li>
                              <li><i class="fa fa-fax"></i> Copyright 2014-2024 Vieclam5chau.com</li>
                              </ul>
                           </div>
                          
                          
                     
                      
                     <div class="col-md-6 col-xs-12">
                        <div class="w100 fl tit-child-larg">
                           <h2 class="h2titfoot not-icon">Trang Chủ </h2>
                        </div>
                        <ul class="ulfooter-contact">
                           
                           <li><i class="fa fa-phone"></i> Liên Hệ Quảng Cáo</li>
                           <li><i class="fa fa-map-marker"></i> Về Chúng Tôi</li>
                           <li><i class="fa fa-fax"></i> Bảng Giá Dịch Vụ</li>
                           
                        </ul>
                       
                     </div>
                    
               </div>
               
                
            </div>
         </div>
        
         </div>
      </div>
     
      <div class="prdcontact-fix">
         <ul>
            <li class="actCall">
               <a href="tel:0913073026">
               <img alt="du lịch" src="https://file4.batdongsan.com.vn/images/opt/mobile/newphone.png">
               </a>
            </li>
            <li class="actSms">
               <a href="tel:0913073026">
               <img alt="du lịch" src="https://file4.batdongsan.com.vn/images/opt/mobile/newsms.png">
               </a>
            </li>
            <li>
               <a href="mailto:vietnamtravel1234@gmail.com">
               <img alt="du lịch" src="https://file4.batdongsan.com.vn/images/opt/mobile/newemail1.png" style="margin: 2px 0;">
               </a>
            </li>
         </ul>
      </div>

    <script>
       function toggleButtons(buttonn) {
   
   var form4 = document.getElementById("forma1");
   if (form4.style.display === "none") {
       form4.style.display = "block";
        
   } else {
       form4.style.display = "none";
      
   }
}
function toggleButtons1(buttonn1) {
   
   var form4 = document.getElementById("formb1");
   if (form4.style.display === "none") {
       form4.style.display = "block";
        
   } else {
       form4.style.display = "none";
      
   }
}
function toggleButtons2(buttonn2) {
   
   var form4 = document.getElementById("formb2");
   if (form4.style.display === "none") {
       form4.style.display = "block";
        
   } else {
       form4.style.display = "none";
      
   }
}
function toggleButtons3(buttonn3) {
   
   var form4 = document.getElementById("formb3");
   if (form4.style.display === "none") {
       form4.style.display = "block";
        
   } else {
       form4.style.display = "none";
      
   }
}
function toggleFormscr(createBtn) {
   
   var form5 = document.getElementById("forma2");
   if (form5.style.display === "none") {
       form5.style.display = "block";
        
   } else {
       form5.style.display = "none";
      
   }
}
function toggleFormslis(listBtn) {
    var forma2 = document.getElementById("forma2");
    var formdanhsach = document.getElementById("formdanhsach");
    
    // Hiển thị form danhsach và ẩn form2
    formdanhsach.style.display = "block";
    forma2.style.display = "none";
}


    </script>
    
    
      <script>
         $(function() {
             $( "#start_date" ).datepicker({
                 //defaultDate: "+1w",
                 minDate: '0',
                 dateFormat: "dd-mm-yy",
                 changeMonth: true,
                 numberOfMonths: 1,
                 onClose: function( selectedDate ) {
                     $( "#end_date" ).datepicker( "option", "minDate", selectedDate );
                 }
             });
             $( "#end_date" ).datepicker({
                 //defaultDate: "+1w",
                 dateFormat: "dd-mm-yy",
                 changeMonth: true,
                 numberOfMonths: 1,
                 onClose: function( selectedDate ) {
                     $( "#start_date" ).datepicker( "option", "maxDate", selectedDate );
                 }
             });
         });
      </script>
      
     

      <script>
         document.addEventListener("DOMContentLoaded", function(event) {
            jQuery('a[href*="tel:"]').on('click', function() {
               gtag('event', 'conversion', {'send_to': 'AW-882166916/ExQfCPj98KIBEISZ06QD'});
            });
         });
      </script>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-MRGZMJD');
      </script>
      <!-- End Google Tag Manager -->
   </body>
   <script>
      $(function(){
          var offset = 115;
          $(window).scroll(function() {
              if ($(this).scrollTop() > offset) {
                  $('.header-bottom').addClass('fixed');
              } else {
                  $('.header-bottom').removeClass('fixed');
              }
          });
          if($(window).scrollTop() > offset) {
              $('.header-bottom').addClass('fixed');
          } else {
              $('.header-bottom').removeClass('fixed');
          }
      });
   </script>
   <script>
      jQuery(document).ready(function() {
          var offset = 20;
          var duration = 500;
          jQuery(window).scroll(function() {
              if (jQuery(this).scrollTop() > offset) {
                  jQuery('.back-to-top').fadeIn(duration);
              } else {
                  jQuery('.back-to-top').fadeOut(duration);
              }
          });
      
          jQuery('.back-to-top').click(function(event) {
              event.preventDefault();
              jQuery('html, body').animate({scrollTop: 0}, duration);
              return false;
          })
      });
      document.addEventListener('DOMContentLoaded', function() {
    document.execCommand('defaultParagraphSeparator', false, 'div');
});
 
   </script>
   <script>
    ClassicEditor
        .create(document.querySelector('#mo_ta_cong_viec'))
        .then(mo_ta_cong_viec => {
            console.log(mo_ta_cong_viec);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#yeu_cau_cong_viec'))
        .then(yeu_cau_cong_viec => {
            console.log(yeu_cau_cong_viec);
        })
        .catch(error => {
            console.error(error);
        });
        ClassicEditor
        .create(document.querySelector('#mo_ta_quyen_loi'))
        .then(mo_ta_quyen_loi => {
            console.log(mo_ta_quyen_loi);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
function getCountryList(continent_id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chose-option-quocgia-empty").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "db/get_diachi.php?continent_id=" + continent_id, true);
    xhttp.send();
}
function getCityList(country_id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chose-option-thanhpho-empty").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "db/get_diachi.php?country_id=" + country_id, true);
    xhttp.send();
}

function getDistrictList(city_id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("chose-option-quan-empty").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "db/get_diachi.php?city_id=" + city_id, true);
    xhttp.send();
}
</script>
 
</html>
