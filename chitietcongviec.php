<?php 
include "sesion.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$anhminhhoa = get_list("SELECT * FROM `xkld` WHERE `id` = '" . $id . "'", $conn)[0]['anhminhhoa'];

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="description"  content="text/html; charset=utf-8;" http-equiv="Content-Type" >
      <meta content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--<link type="image/x-icon" href="https://vietnamtravel.net.vn/favicon.ico" rel="shortcut icon" />-->
      <title> Việc Làm Tại Năm Châu </title>
      <meta name="keywords" content="Tìm việc theo ngành nghề ,Việc làm An toàn lao động,việc làm Bán hàng kỹ thuật,Việc làm Bán lẻ/ bán sỉ,Việc làm Báo chí? Truyền hình,Việc làm Bảo hiểm,Việc làm Bảo trì / Sửa chữa,Việc làm Bất động sản,Việc làm Biên / Phiên dịch,Việc làm Bưu chính - Viễn thông,Việc làm Bưu chính - Viễn thông,Việc làm Chứng khoán / Vàng / Ngoại tệ,Việc làm Cơ khí / Chế tạo / Tự động hóa,Việc làm Công nghệ cao,Việc làm Công nghệ Ô tô,Việc làm Công nghệ thông tin Việc làm Dầu khí/Hóa chất,Việc làm Dệt may / Da giày,Việc làm Địa chất / Khoáng sản
,Việc làm Dịch vụ khách hàng
,Việc làm Điện / Điện tử / Điện lạnh
,Việc làm Điện tử viễn thông
,Việc làm Du lịch
,Việc làm Dược phẩm / Công nghệ sinh học
,Việc làm Giáo dục / Đào tạo Việc làm Hàng cao cấp
,Việc làm Hàng gia dụng
,Việc làm Hàng hải
,Tìm việc làm tại các quốc gia
,Việc làm tại Bi
,Việc làm tại Cộng hòa Séc
,Việc làm tại Đức
,Việc làm tại Đan Mạch
,Việc làm tại Tây Ban Nha
,Việc làm tại Pháp
,Việc làm tại Ireland
,Việc làm tại Ý
,Việc làm tại Hungary
,Việc làm tại Hà Lan
,Việc làm tại Áo
,Việc làm tại Ba Lan
,Việc làm tại Bồ Đào Nha
,Việc làm tại Nga
,Việc làm tại Thụy Sĩ
,Việc làm tại Cộng hòa Slovakia
,Việc làm tại Thụy Điển
,Việc làm tại Thổ Nhĩ Kỳ
,Việc làm tại Ukraina
,Việc làm tại Vương Quốc Anh
,Việc làm tại Argentina
,Việc làm tại Brasil
,Việc làm tại Canada
,Việc làm tại Chile
,Việc làm tại Colombia
,Việc làm tại Ecuador
,Việc làm phổ biến
,Tìm việc làm Thực tập sinh
,Tìm việc làm Trợ giảng
,Tìm việc làm Giáo viên
,Tìm việc làm Thư ký
,Tìm việc làm Nhân viên kỹ thuật
,Tìm việc làm IT Helpdesk
,Tìm việc làm Lập trình viên PHP
,Tìm việc làm Lập trình viên Javascript
,Tìm việc làm Lập trình viên ReactJS
,Tìm việc làm Lập trình viên VueJS
,Tìm việc làm Lập trình viên AngularJS
,Tìm việc làm Lập trình viên NodeJS
,Tìm việc làm Lập trình viên Java
,Tìm việc làm Lập trình viên .NET
,Tìm việc làm Lập trình Front-End
,Tìm việc làm Lập trình Back-End Tìm việc làm Lập trình viên iOS
,Tìm việc làm Lập trình viên Android
,Tìm việc làm Lập trình viên React Native
,Tìm việc làm Lập trình viên Mobile
,Tìm việc làm Tester
,Tìm việc làm Business Analyst
,Tìm việc làm Data Analyst
,Tìm việc làm Lập trình viên
,Tìm việc làm Fullstack Developer
,Tìm việc làm Unity Developer
,Tìm việc làm Game Developer
,Tìm việc làm Nhân viên Telesales
,Tìm việc làm Nhân viên kinh doanh" />
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
        <link href="css/duhocnghe.css" rel="stylesheet">
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
      <style>
      
        .social-icons {
            display: flex;
            gap: 20px;
        }
        .social-icons a {
            text-decoration: none;
            color: #fff;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            transition: background-color 0.3s;
        }
        .social-icons a.facebook {
            background-color: #3b5998;
        }
        .social-icons a.twitter {
            background-color: #1da1f2;
        }
        .social-icons a.email {
            background-color: #db4437;
        }
        .social-icons a.linkedin {
            background-color: #0077b5;
        }
        .social-icons a:hover {
            opacity: 0.8;
        }
        .search-container {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px 8px;
            background-color: #fff;
        }
        .search-container input {
            border: none;
            outline: none;
            padding: 10px;
            flex: 1;
            font-size: 14px;
            border-radius: 20px;
        }
        .search-container button {
            border: none;
            background: none;
            padding: 0 10px;
            cursor: pointer;
        }
        .search-container button svg {
            width: 24px;
            height: 24px;
            fill: #888;
        }
        .search-container button:hover svg {
            fill: #555;
        }
           .content {
            font-weight: bold;
            text-align: center;
            margin: 20px;
        }
        .content img {
            display: block;
            margin: 40px auto;
            width: 100%; /* Đặt chiều rộng cụ thể */
            height: auto; /* Chiều cao tự động để giữ tỉ lệ */
        }
    .dot-list li {
    position: relative;
    padding-left: 20px; 
    margin-left: 200px;
}

.dot-list li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    background-color: #000;
    border-radius: 50%;
}
.quangcao1 ,.quangcao2,.quangcao3,.quangcao4,.quangcao5,.quangcao6 {
    display: flex;
    align-items: center; /* Căn giữa theo chiều dọc */
    max-width: 600px; /* Điều chỉnh kích thước tối đa của container */
    margin: 0 auto; /* Canh giữa container */
}

img {
 width: 150px; /* Đặt chiều rộng mong muốn */
    height: auto; /* Giữ nguyên tỷ lệ khung hình */
}

.text {
    margin-left: 20px; /* Khoảng cách giữa ảnh và văn bản */
}

.text p {
    font-size: 16px; /* Cỡ chữ của văn bản */
    line-height: 1.5; /* Khoảng cách giữa các dòng chữ */
}
    </style>
      
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
                           <li class="megamenusub" style="border-color:#5882FA">
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
                           <li class="">
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


    </div>
    

        
        <div class=" col-md-12 col-xs-12 " >
         <div class=" col-md-9 col-xs-12 "  style="background-color: #fff;border: 0.5px solid #000;">
       <h2 style = "text-align: center; color: blue; "> <? echo get_list("SELECT * FROM `xkld` WHERE `id` = '" . $id . "'", $conn)[0]['tieude']?></h2>
    

    <div class="social-icons">
        <a href="https://www.facebook.com" class="facebook" target="_blank" style = "margin-left: 400px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2.04c-5.5 0-10 4.48-10 10 0 5 3.66 9.13 8.44 9.88v-7.03h-2.54v-2.85h2.54v-2.2c0-2.52 1.5-3.9 3.77-3.9 1.1 0 2.24.19 2.24.19v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.76l-.44 2.85h-2.32v7.04c4.78-.75 8.44-4.88 8.44-9.88 0-5.52-4.5-10-10-10z"/></svg>
        </a>
        <a href="https://www.twitter.com" class="twitter" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.47.69a4.28 4.28 0 0 0 1.88-2.37c-.84.5-1.77.85-2.77 1.03A4.26 4.26 0 0 0 16 4c-2.35 0-4.26 1.91-4.26 4.26 0 .34.04.68.1 1-3.54-.18-6.7-1.88-8.8-4.47a4.22 4.22 0 0 0-.57 2.14 4.26 4.26 0 0 0 1.89 3.55c-.7-.02-1.35-.21-1.92-.53v.05c0 2.07 1.47 3.8 3.43 4.19-.36.1-.75.16-1.14.16-.28 0-.55-.03-.82-.08.56 1.75 2.17 3.03 4.08 3.06a8.54 8.54 0 0 1-5.29 1.82c-.34 0-.67-.02-1-.06A12.05 12.05 0 0 0 8.69 20c7.83 0 12.1-6.49 12.1-12.1 0-.18 0-.35-.01-.53.83-.6 1.55-1.35 2.12-2.2z"/></svg>
        </a>
        <a href="mailto:someone@example.com" class="email" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12.713l11.985-7.713h-23.97l11.985 7.713zm-12-6.484v13.771l8.72-7.144-8.72-6.627zm13.68 6.851l-1.68 1.097-1.68-1.097-9.32 7.605h21.999l-9.319-7.605zm2.296-.708l8.724 6.628v-13.773l-8.724 6.632z"/></svg>
        </a>
        <a href="https://www.linkedin.com" class="linkedin" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 3a2.002 2.002 0 0 1 2 2v14a2.002 2.002 0 0 1-2 2H5a2.002 2.002 0 0 1-2-2V5a2.002 2.002 0 0 1 2-2h14m-9.653 14v-6H6.653v6h2.694m-1.347-6.833c.833 0 1.505-.68 1.505-1.517c0-.84-.672-1.517-1.505-1.517c-.833 0-1.505.677-1.505 1.517c0 .837.672 1.517 1.505 1.517M18 17V12.306c0-2.357-1.269-3.452-2.961-3.452c-1.362 0-1.967.758-2.305 1.291V11H11.47c.036.715 0 6 0 6h2.742v-3.354c0-.19.014-.381.07-.518c.152-.383.497-.78 1.076-.78c.76 0 1.066.59 1.066 1.452V17h2.757Z"/></svg>
        </a>
    </div>

    
  

<div style="margin-top: 40px;"> <? echo get_list("SELECT * FROM `xkld` WHERE `id` = '" . $id . "'", $conn)[0]['gioithieu']?></div>
<div class="content">
        <div>
        <img src="image/<?php echo $anhminhhoa?>" alt="Ảnh minh họa">
        <p style="textext-align:center"><?php echo get_list("SELECT * FROM `xkld` WHERE `id` = '" . $id . "'", $conn)[0]['tenminhhoa']?></p>
        </div>   
          <span style="textext-align:center;"> Danh Sách Các Ngành Nghề  </span>  </div>
           <?php 
for ($i = 1; $i <= 5; $i++) { 
    foreach (get_list("SELECT * FROM `xkld` WHERE `id` = '" . $id . "'",$conn) as $row) { 
?>
    <div class="truong1">
        <h1><?php echo $row['tenanh'.$i]?></h1>
        <p><?php echo $row['mucso'.$i]?> </p>
        <div class="content">
            <img src="image/<?php echo $row['anhminhhoa'.$i]?>" alt="Ảnh minh họa">
            <span style="text-align:center;"> <?php echo $row['tenanh'.$i]?> </span>
        </div>
        
    </div>
<?php 
    } 
} 
?>


<h3 style ="margin-top: 80px;">Đăng Ký Nhận Tư Vấn Trực Tiếp</h3>


<input type="text" style="height: 40px;margin-top:30px; width:90%; margin-left:20px;" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Họ Và Tên:">
<input type="text" style="height: 40px; margin-top:30px; width:90%; margin-left:20px;" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Số Điện Thoại:">
   <input type="text" style="height: 40px; margin-top:30px; width:90%; margin-left:20px;" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Email của bạn:">
   <input type="text" style="height: 40px; margin-top:30px; width:90%; margin-left:20px;" class="form-control show-select" id="chose-option-diemden-empty" placeholder="Đăng Ký , tư vấn chi phí, hồ sơ đi XKLD:">
    <select style="width: calc(100% - 20px); padding: 10px;margin-top: 30px; width:90%;margin-left:20px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;" id="continent" name="continent" onchange="changeCountries()" required>
                <option value="">Chọn châu lục</option>
                <option value="asia">Châu Á</option>
                <option value="europe">Châu Âu</option>
                <option value="america">Châu Mỹ</option>
                <option value="australia">Châu Úc</option>
            </select>
             <select style="width: calc(100% - 20px); padding: 10px;margin-bottom: 20px;margin-top: 30px; width:90%;margin-left:20px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;" id="country" name="country" onchange="changeCities()" required>
                <option value="">Bạn muốn đăng ký xuất khẩu lao động tại nước nào?</option>
            </select>
            
   

    
  

<div class="">
<button id="dangkycongviec" class="dangkycongviec" style = "margin-left: 10px;margin-top: 40px; margin-bottom: 100px;" > <i class="fa fa-paper-plane" aria-hidden="true"></i> Đăng ký ngay  </button>

     </div>
    
  



   
  </div>
    <div class=" col-md-3 col-xs-12 "  style="background-color: #fff;">
        <div class="search-container" style="margin-top:20px;">
        <input type="text" placeholder="Tìm kiếm...">
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
        </button>
    </div>
    <h3 style="color:blue;">Bài Viết Mới Nhất </h3>
   <div class="quangcao1" style= "margin-bottom: 40px;">
        <img src="image/quangcao1.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao2" style= "margin-bottom: 40px;">
        <img src="image/quangcao2.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao3"style= "margin-bottom: 40px;">
        <img src="image/quangcao3.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao4"style= "margin-bottom: 40px;">
        <img src="image/quangcao4.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao5"style= "margin-bottom: 40px;">
        <img src="image/quangcao5.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao6"style= "margin-bottom: 40px;">
        <img src="image/quangcao6.jpg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    
    
    <div class="quangcao1" style= "margin-bottom: 100px;">
        <img src="image/quangcao1.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao2" style= "margin-bottom: 40px;">
        <img src="image/quangcao2.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao3"style= "margin-bottom: 40px;">
        <img src="image/quangcao3.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao4"style= "margin-bottom: 40px;">
        <img src="image/quangcao4.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao5"style= "margin-bottom: 40px;">
        <img src="image/quangcao5.jpeg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
    <div class="quangcao6"style= "margin-bottom: 40px;">
        <img src="image/quangcao6.jpg" alt="quangcao1">
        <div class="text">
            <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
        </div>
    </div>
     <div class="w100 fl">
                     <div class="w100 fl tit-child-larg">
                        <h2 class="h2titfoot not-icon" style="color: blue;">Kết nối với chúng tôi</h2>
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
        function changeCountries() {
            var continentSelect = document.getElementById("continent");
            var countrySelect = document.getElementById("country");
            var selectedContinent = continentSelect.value;

            // Xóa tất cả các tùy chọn cũ trong dropdown quốc gia
            countrySelect.innerHTML = "";

            // Thêm tùy chọn mặc định
            var defaultOption = document.createElement("option");
            defaultOption.text = "Chọn quốc gia";
            defaultOption.value = "";
            countrySelect.add(defaultOption);

            // Thêm các tùy chọn tương ứng với châu lục được chọn
            switch (selectedContinent) {
                case "asia":
                    addOption(countrySelect, "Việt Nam", "vietnam");
                    addOption(countrySelect, "Sudan", "sudan");
                    addOption(countrySelect, "Trung Quốc", "trungquoc");
                    addOption(countrySelect, "Hong Kong", "hongkong");
                    addOption(countrySelect, "Indonesia", "indo");
                    addOption(countrySelect, "Ấn Độ", "ando");
                    addOption(countrySelect, "Nhật Bản", "nhat");
                    addOption(countrySelect, "Malaysia", "malay");
                    addOption(countrySelect, "New Zealand", "new");
                    addOption(countrySelect, "Philippines", "philip");
                    addOption(countrySelect, "Ả Rập Saudi", "arap");
                    addOption(countrySelect, "Singapore", "sing");
                    addOption(countrySelect, "Thái Lan", "thailan");
                    addOption(countrySelect, "Đài Loan", "dailoan");
                    addOption(countrySelect, "Tiểu vương quốc Ả Rập", "tieuvuong");
                    break;

                case "europe":
                    addOption(countrySelect, "Bỉ", "bi");
                    addOption(countrySelect, "Cộng hòa Séc", "sec");
                    addOption(countrySelect, "Đức", "duc");
                    addOption(countrySelect, "Đan Mạch", "danmach");
                    addOption(countrySelect, "Tây Ban Nha", "taybannha");
                    addOption(countrySelect, "Pháp", "phap");
                    addOption(countrySelect, "Ireland", "ireland");
                    addOption(countrySelect, "Ý", "y");
                    addOption(countrySelect, "Hungary", "hun");
                    addOption(countrySelect, "Hà Lan", "halan");
                    addOption(countrySelect, "Áo", "ao");
                    addOption(countrySelect, "Ba Lan", "balan");
                    addOption(countrySelect, "Bồ Đào Nha", "bodaonha");
                    addOption(countrySelect, "Nga", "nga");
                    addOption(countrySelect, "Thuỵ Sĩ", "thuysi");
                    addOption(countrySelect, "Thuỵ Điển", "thuydien");
                    addOption(countrySelect, "Thổ Nhĩ Kỳ", "thonhiki");
                    addOption(countrySelect, "Ukraina", "ukraina");
                    addOption(countrySelect, "Vương quốc Anh", "anh");
                    break;

                case "america":
                    addOption(countrySelect, "Argentina", "argentine");
                    addOption(countrySelect, "Brasil", "brasi");
                    addOption(countrySelect, "Canada", "canada");
                    addOption(countrySelect, "Chile", "chile");
                    addOption(countrySelect, "Colombia", "colo");
                    addOption(countrySelect, "Mexico", "mexi");
                    addOption(countrySelect, "Hàn Quốc", "han");
                    addOption(countrySelect, "Hoa Kỳ", "hoaky");
                    addOption(countrySelect, "Uruguay", "uru");
                    addOption(countrySelect, "Venezuela", "vene");
                    break;

                case "australia":
                    addOption(countrySelect, "Australia", "australia");
                    break;

                
                default:
                    break;
            }
        }
        function addOption(selectElement, optionText, optionValue) {
    var option = document.createElement("option");
    option.text = optionText;
    option.value = optionValue;
    selectElement.add(option);
}
           </script>
   
</html>
