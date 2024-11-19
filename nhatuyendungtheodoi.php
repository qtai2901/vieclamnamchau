<?php include "sesion.php"?>
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
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
     
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
      #edit-email-btn {
    padding: 5px 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    Width:120px;
}
.profile-picture {
    width: 100px; /* Kích thước ảnh */
    height: 100px; /* Kích thước ảnh */
    border-radius: 50%; /* Làm tròn ảnh */
    overflow: hidden; /* Ẩn phần dư thừa nếu ảnh vượt qua hình tròn */
}

.profile-picture img {
    width: 100%; /* Đảm bảo ảnh điền vào phần tử cha */
    height: auto; /* Đảm bảo tỷ lệ khung hình bị giữ nguyên */
    border-radius: 50%; /* Giữ hình ảnh tròn trong trường hợp nó không có kích thước hoàn hảo */
}
.upload-button {
    position: relative;
    display: inline-block;
    margin-left: 40px;
    
}

.upload-button input[type="file"] {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

.upload-button label {
    display: block;
    padding: 10px 20px;
    background-color: #F2E0F7;
    font-size: 12px;;
    color: blue;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.container111 {
    width: 80%;
    max-width: 900px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.profile-option {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    margin-bottom: 20px;
}

.profile-option-content {
    display: flex;
    align-items: center;
}

.profile-option-content img {
    width: 50px;
    height: 50px;
    margin-right: 40px;
}

.profile-option-content h2 {
    font-size: 18px;
    margin: 0;
    color: #333;
}

.profile-option-content p {
    margin: 5px 0 0 0;
    color: #666;
}

.recommended {
    background-color: #1e90ff;
    color: #fff;
    border-radius: 4px;
    padding: 2px 6px;
    font-size: 12px;
    margin-left: 5px;
}

#create-button1 {
    background-color: #6200ea;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 40px;
    cursor: pointer;
    width: 200px;
}

#create-button1 :hover {
    background-color: #3700b3;
}

.container {
    width: 100%;
    margin: 0 auto;
    padding: 20px;
}

header {
    
    margin-bottom: 20px;
}

header h1 span {
    color: #007bff;
}

.applied-jobs, .suggested-jobs {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.applied-jobs h2, .suggested-jobs h2 {
    margin-top: 0;
}

.job-list p {
    text-align: center;
    color: #666;
}

.job-list img {
    display: block;
    margin: 20px auto;
    max-width: 100%;
    height: auto;
}

.filter {
    text-align: right;
}

.filter label {
    margin-right: 10px;
}

.suggested-jobs .job {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #ddd;
    padding: 10px 0;
}

.suggested-jobs .job:first-child {
    border-top: none;
}

.job-details {
    display: flex;
    align-items: center;
}

.job-details img {
    width: 100px;
    height: 100px;
    margin-right: 10px;
    object-fit: contain;
}

.save-job {
    background: none;
    border: none;
    font-size: 20px;
    color: #007bff;
    cursor: pointer;
}

.save-job:hover {
    color: #0056b3;
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



        <button class="buttonn" onclick="toggleButtons(this)"><i class="fa fa-angle-down" aria-hidden="true"></i> <strong>Quản lý tài khoản</strong> </button>


            <form id ="forma1">

            <button class="createBtn" onclick=""><a href="taikhoancuatoi.php" style="color: black;"><i class="fa fa-plus-square" aria-hidden="true"></i> Tài khoản của bạn </button>
            
         
          

      


        <button class="buttonn1" onclick="toggleButtons1(this)"><i class="fa fa-angle-down" aria-hidden="true"></i> <strong>Quản lý hồ sơ
        </strong></button>


           <form id ="formb1">

            <button class="createBtn1" onclick="toggleForms1(this)"><a href="hosocuaban.php" style="color: black;"><i class="fa fa-plus-square" aria-hidden="true"></i> Hồ sơ của bạn</a></button>
            

<button class="listBtn1" onclick="toggleForms1(this)"><a href="trangtricv.php" style="color: black;"><i class="fa fa-heart" aria-hidden="true"></i></i> Trang trí cv</a></button>
          
          </form>


          <button class="buttonn2" onclick="toggleButtons2(this)"><i class="fa fa-angle-down" aria-hidden="true"></i><strong> Quản lý Việc làm </strong></button>


<form id ="formb2">

  <button class="createBtn2" onclick="toggleForms2(this)"><a href="vieclamungtuyen.php" style="color: black;"><i class="fa fa-plus-square" aria-hidden="true"></i> Việc làm đã ứng tuyển </a> </button>
 <button class="listBtnn2" onclick="toggleForms2(this)"><a href="vieclamdaluu.php" style="color: black;"><i class="fa fa-search" aria-hidden="true"></i> Việc làm đã lưu </a></button>
 <button class="listBtn2" onclick="toggleForms2(this)"><a href="thongbaovieclam.php" style="color: black;"><i class="fa fa-heart" aria-hidden="true"></i></i> Thông báo việc làm </a></button>
 
</form>

<button class="buttonn3" onclick="toggleButtons3(this)"><i class="fa fa-angle-down" aria-hidden="true"></i><strong> Nhà tuyển dụng bạn quan tâm </strong></button>


<form id ="formb3">

 <button class="createBtn3" onclick="toggleForms3(this)"><a href="nhatuyendungxemhoso.php" style="color: black;"><i class="fa fa-plus-square" aria-hidden="true"></i> Nhà tuyển dụng xem hồ sơ của bạn </a></button>

<button class="listBtn3" onclick="toggleForms3(this)"><a href="nhatuyendungtheodoi.php" style="color: black;"><i class="fa fa-heart" aria-hidden="true"></i></i> Nhà tuyển dụng đang theo dõi </a></button>
</form>


        </div>
        <div class="menu5">
            
            
          <div class="container">
        <header>
            <h1>Xin Chào, <span>Duy Nguyễn</span></h1>
        </header>

        <section class="applied-jobs">
            <h2>Nhà tuyển dụng đang theo dõi</h2>
            <div class="job-list">
                <p> Chưa có nhà tuyển dụng theo dõi bạn</p>
                <img src="imgs/anhchuaungtuyen.png" alt="Empty State Image">
            </div>
          
        </section>

        <section class="suggested-jobs">
            <h2>Việc làm gợi ý</h2>
            <div class="job">
                <div class="job-details">
                    <img src="imgs/anhlogo1.jpeg" alt="Company Logo">
                    <div>
                        <h3>Chuyên Viên Hoạch Định Tài Chính</h3>
                        <p>AIA Exchange Đà Nẵng</p>
                        <p>6 - 15 triệu</p>
                        <p>Đà Nẵng</p>
                    </div>
                </div>
                <button class="save-job">&#x2661;</button>
            </div>
            <div class="job">
                <div class="job-details">
                    <img src="imgs/anhlogo1.jpeg" alt="Company Logo">
                    <div>
                        <h3>Nhân Viên Kinh Doanh Bảo Hiểm</h3>
                        <p>AIA Exchange Đà Nẵng</p>
                        <p>12 - 20 triệu</p>
                        <p>Đà Nẵng</p>
                    </div>
                </div>
                <button class="save-job">&#x2661;</button>
            </div>
              <div class="job">
                <div class="job-details">
                    <img src="imgs/anhlogo1.jpeg" alt="Company Logo">
                    <div>
                        <h3>Nhân Viên Kinh Doanh Bảo Hiểm</h3>
                        <p>AIA Exchange Đà Nẵng</p>
                        <p>12 - 20 triệu</p>
                        <p>Đà Nẵng</p>
                    </div>
                </div>
                <button class="save-job">&#x2661;</button>
            </div>
              <div class="job">
                <div class="job-details">
                    <img src="imgs/anhlogo1.jpeg" alt="Company Logo">
                    <div>
                        <h3>Nhân Viên Kinh Doanh Bảo Hiểm</h3>
                        <p>AIA Exchange Đà Nẵng</p>
                        <p>12 - 20 triệu</p>
                        <p>Đà Nẵng</p>
                    </div>
                </div>
                <button class="save-job">&#x2661;</button>
            </div>
              <div class="job">
                <div class="job-details">
                    <img src="imgs/anhlogo1.jpeg" alt="Company Logo">
                    <div>
                        <h3>Nhân Viên Kinh Doanh Bảo Hiểm</h3>
                        <p>AIA Exchange Đà Nẵng</p>
                        <p>12 - 20 triệu</p>
                        <p>Đà Nẵng</p>
                    </div>
                </div>
                <button class="save-job">&#x2661;</button>
            </div>
        </section>
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
<script>
    flatpickr("#birthday-picker", {
        dateFormat: "d/m/Y",
        maxDate: "today" // Để ngăn người dùng chọn ngày trong tương lai
    });
</script>
    <script >
        // This script currently doesn't add functionality, but you can expand it as needed.
document.addEventListener('DOMContentLoaded', () => {
    const saveButtons = document.querySelectorAll('.save-job');
    saveButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('saved');
            if (button.classList.contains('saved')) {
                button.textContent = '\u2665'; // Filled heart
            } else {
                button.textContent = '\u2661'; // Outline heart
            }
        });
    });
});

    </script>
 
</html>
