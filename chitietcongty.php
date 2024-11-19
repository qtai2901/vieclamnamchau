<?php include "sesion.php";
if ($_GET['id']) {
    $id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="text/html; charset=utf-8;" http-equiv="Content-Type">
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
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="Việc làm 5 châu" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />


    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/menu-mobile.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/taotin.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha384-2WNw8ovEXLezUJrT4n0Ry1Ye1K8gAdBHA0y1rQip2O5rG5m41WdbC0J6TwCp8gqV" crossorigin="anonymous">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

    <link
        href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-nr4lQo2GcX1MCfjxuFrP6YdsHk9eT6eJiITjpsPoTgW1Jh2tVDw/+qWtIe8aWdfHx7rS2ftFcEgsjZcdZpwfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- Js menu mobile-->
    <script>
        $(document).ready(function (e) {
            $(".arrown_menu_accordion").click(function () {
                var val = $(this).attr("val");
                $("#" + val).toggle();
            });
        });
    </script>
    <script src="js/frame_script.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
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
                autoPlay: true,
                slideMargin: 10,
                addClassActive: true,
                itemsCustom: [
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
        function gtag() { dataLayer.push(arguments); }
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
            width: 100%;
            /* Đặt chiều rộng cụ thể */
            height: auto;
            /* Chiều cao tự động để giữ tỉ lệ */
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

        .quangcao1,
        .quangcao2,
        .quangcao3,
        .quangcao4,
        .quangcao5,
        .quangcao6 {
            display: flex;
            align-items: center;
            /* Căn giữa theo chiều dọc */
            max-width: 600px;
            /* Điều chỉnh kích thước tối đa của container */
            margin: 0 auto;
            /* Canh giữa container */
        }

        img {
            width: 150px;
            /* Đặt chiều rộng mong muốn */
            height: auto;
            /* Giữ nguyên tỷ lệ khung hình */
        }

        .text {
            margin-left: 20px;
            /* Khoảng cách giữa ảnh và văn bản */
        }

        .text p {
            font-size: 16px;
            /* Cỡ chữ của văn bản */
            line-height: 1.5;
            /* Khoảng cách giữa các dòng chữ */
        }
    </style>

</head>

<body>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '238563550019858',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v2.12'
            });
        };
        (function (d, s, id) {
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
        <a class="icon_menu_mobile" href="javascript:void(0)" val="0" rel="nofollow"><i class="fa fa-bars"
                aria-hidden="true"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 box-mainmenu">
                    <nav class="menunav">
                        <ul class="ulwap-mainmenu">
                            <li><a href="index.php" class="mn-home"><i class="fa fa-home"></i></a></li>
                            <li class="megamenusub">
                                <a href="index.php" class=" 'active' ">
                                    Trang Chú
                                </a>

                            </li>
                            <li class="megamenusub">
                                <a href="danhsachtatcanghe.php" class=" 'active' ">
                                    Việc Làm
                                </a>

                            </li>
                            <li class="">
                                <a href="duhocnghe.php" class=" 'active' ">
                                    Du Học Nghề
                                </a>


                            </li>

                            <li class="">
                                <a href="xuatkhaulaodong.php" class=" 'active' ">
                                    Xuất Khẩu Lao Động
                                    <img alt="du lịch" class="icon-posmenu" src="imgs/icon-news.gif"> </a>

                            </li>
                            <li class="">
                                <a href="dichvu.php" class="">
                                    Dịch Vụ
                                </a>
                            </li>
                            <li class="">
                                <a href="tintuc.php" class=" 'active' ">
                                    Tin Tức
                                </a>


                            </li>
                            <li class="">
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










    <div>
        <h5 style="margin-top: 30px;">Trang chủ / Việc làm /Bán hàng - Kinh doanh <strong> / Nhân viên phục vụ </strong>
        </h5>

    </div>


    <?php foreach (get_list("SELECT * FROM `tin_tuyen_dung` WHERE `id`='$id'",$conn) as $row) {
        $nghe_id = $row['nghe_nghiep'];
         $quoc_gia_id = $row['quoc_gia'];
         $quan_id = $row['quan'];
         $thanhpho_id = $row['thanh_pho'];
         $quan = get_list("SELECT * FROM `districts` WHERE `id`='$quan_id'", $conn)[0]['name'];
         $quoc_gia = get_list("SELECT * FROM `countries` WHERE `id`='$quoc_gia_id'", $conn)[0]['name'];
         $thanhpho = get_list("SELECT * FROM `cities` WHERE `id`='$thanhpho_id'", $conn)[0]['name'];
         $nghe_nghiep =(json_decode(file_get_contents('nghenghiep.json'), true))[$nghe_id];
        ?>

    <div class="col-md-12 col-xs-12 bx-content-lst-tour1">



        <div
            class="min-h-[112px] p-2 relative bg-white leading-6 rounded border border-solid hover:shadow-sd-hover hover:border-se-accent-100 hover:border-opacity-50 border-se-blue-10">
            <a data-track-content="" data-content-name="vl24h.jobbox.searchPage_suggestJob"
                data-content-piece="200326866_1_1" class="flex relative w-full h-full flex-col" target="_blank">
                <div class="image-with-text" title="Chuyên Viên Đào Tạo">
                    <img alt="" src="imgs/anhlogo6.png">
                    <div class="text-content">
                        <h5 class="text-se-neutral-64 text-12 leading-6 truncate mb-0 font-normal max-w-[500px] lg:max-w-[530px]"
                            role="button">
                            <?echo $row['ten_cty']?>
                        </h5>
                        <h2 class="text-se-neutral-64 text-12 leading-6 truncate mb-2 font-normal max-w-[500px] lg:max-w-[530px]"
                            role="button">
                            <?echo $row['chuc_danh']?>
                        </h2>
                        <div class="col-md-12 col-xs-12 ">
                            <div class="col-md-4 col-xs-12 ">
                                <h5 class="text-se-neutral-64 text-12 leading-6 truncate mb-4 font-normal max-w-[500px] lg:max-w-[5300px]height: 300px;"
                                    role="button">

                                    <i class="fa fa-money" aria-hidden="true"></i> <?echo $row['luong_toi_thieu']?> - <?echo $row['luong_toi_da']." ".$row['don_vi_tien_te']?>
                                </h5>
                            </div>

                            <div class="col-md-4 col-xs-12 ">
                                <h5 class="text-se-neutral-64 text-12 leading-6 truncate mb-10 font-normal max-w-[500px] lg:max-w-[530px] height: 300px;"
                                    role="button">

                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i><?php echo date("d-m-Y", strtotime($row['han_nop_ho_so']))?>
                                </h5>
                            </div>
                            <div class="col-md-6 col-xs-12 ">
                                <h5 class="text-se-neutral-64 text-12 leading-6 truncate mb-10 font-normal max-w-[800px] lg:max-w-[830px] height: 500px;"
                                    role="button">

                                    <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $thanhpho."-".$quoc_gia?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 ">
                            <div class="col-md-4 col-xs-12 ">
                                <button type="button" class="btn btn-primary" onclick="openPopup()">Nộp Hồ Sơ</button>

                            </div>
                        </div>


                    </div>
                </div>
                <span class="svicon-heart cursor-pointer ml-2 text-lg text-se-accent-100 mt-0.5"></span>
            </a>
        </div>
    </div>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closePopup()">&times;</span>

            <h5>Ứng tuyển vị trí</h5>
            <h2> <?echo $row['chuc_danh']?></h2>
            <h5> <?echo $row['ten_cty']?></h5>
            <div class="container3">
                <img src="imgs/anhhoso.png" alt="Description of your image" style="width: 400px; height: auto;">
            </div>
            <div class="col-md-12 col-xs-12 ">
                <div class="col-md-6 col-xs-12 ">
                <a href="taohosotructuyen.php?id=<?echo $id?>" type="button"class="create-button"><i class="fa fa-plus" aria-hidden="true"></i>Tạo Hồ Sơ Trực
                        Tuyến</a>
                    
                </div>
                <div class="col-md-6 col-xs-12 ">

                    <form id="upload-form" action="db/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" id="file-input" class="hidden-input" name="fileToUpload"style="display:none">
        <button type="button" class="download-button" onclick="document.getElementById('file-input').click();">
            <i class="fa fa-download" aria-hidden="true"></i>Tải Lên Hồ Sơ Có Sẳn
        </button>
    
                    <h5> file doc,pdf có dung lượng <=2MB </h5>
                </div>



            </div>
            <p>----------------------------------------------------------------------------------------------------------------------------
            </p>
            <div class="col-md-12 col-xs-12 ">
                <div class="col-md-6 col-xs-12 ">

                    <h5>Nhân thông báo việc làm tương tự</h5>
                </div>
                <div class="col-md-6 col-xs-12 ">

                    <button class="button123"><i class="fa fa-download" aria-hidden="true"></i>Nộp Hồ Sơ</button>

                </div>
            </div>
            </form>
            <h5 class="dieukhoan">Bằng việc nhấn nút nộp hồ sơ , tôi đồng ý chia sẻ thông tin cá nhân với nhà tuyển dụng
                theo các điều khoản sử dụng , chính sách bảo mật và chính sách dữ liệu cá nhân của Việc Làm Năm Châu
            </h5>





        </div>
    </div>

    <div class="menuchitietcongty" style="display: flex;   background-color: #EFF5FB;">


        <div class="tabs" style="width: 70%;">
            <ul class="tab-links">
                <div style="display: flex; align-items: center;margin-top: 30px;">
                    <li><a href="#tab-account" style="margin-left: 20px;color:black;">Chi tiết tuyển dụng</a></li>
                    <li><a href="#tab-company" style="margin-left: 60px;color:black;">Công ty</a></li>
                </div>
            </ul>

            <div class="tab-content active" id="tab-account">
                <!-- style=" background-color: #EFF8FB;" -->

                <div id="account-form" style="margin-top:20px;"
                    enctype="multipart/form-data">
                    <!--<form >-->
                    <div class="hline" style="margin-left: 20px;margin-top:-10px;"></div>


                    <h3>Thông tin chung</h3>

                    <div class="form-thongtinchung">
                        <div style="display: flex; align-items: center;margin-top: 30px;">
                            <div class="date-container">
                                <div class="date-icon">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;">Ngày Đăng:</p>
                                    <p><?php echo date("d-m-Y", strtotime($row['created_at']))?></p>
                                </div>
                            </div>
                            <div class="date-container" style="margin-left:200px;">
                                <div class="date-icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;"> Thời gian thử việc:</p>
                                    <p> <?echo $row['thoi_han_thu_viec']?> tháng</p>
                                </div>
                            </div>
                            <div class="date-container" style="margin-left:200px;">
                                <div class="date-icon">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;"> Cấp bậc:</p>
                                    <p><?echo $row['cap_bac']?></p>

                                </div>

                            </div>


                        </div>
                        <div class="line" style="margin-top: 20px;"></div>

                        <div style="display: flex; align-items: center;margin-top: 30px;">
                            <div class="date-container">
                                <div class="date-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;">Số lượng tuyển:</p>
                                    <p><?echo $row['so_luong_tuyen']?></p>
                                </div>
                            </div>
                            <div class="date-container" style="margin-left:200px;">
                                <div class="date-icon">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;"> Hình thức làm việc:</p>
                                    <p><?echo $row['hinh_thuc_lam_viec']=="Full-time"?"Toàn thời gian cố định":"Bán Thời gian" ?></p>
                                </div>
                            </div>

                        </div>
                        <div class="line" style="margin-top: 20px;"></div>
                        <div style="display: flex; align-items: center;margin-top: 30px;">
                            <div class="date-container">
                                <div class="date-icon">
                                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;">Độ tuổi:</p>
                                    <p><?echo $row['do_tuoi_toi_thieu']." - ".$row['do_tuoi_toi_da']." tuổi"?></p>
                                </div>
                            </div>
                            <div class="date-container" style="margin-left:200px;">
                                <div class="date-icon">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;"> Yêu cầu bằng cấp:</p>
                                    <p><?echo $row['bang_cap']?></p>
                                </div>
                            </div>
                            <div class="date-container" style="margin-left:200px;">
                                <div class="date-icon">

                                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;"> Yêu cầu kinh nghiệm:</p>
                                    <p><?echo $row['kinh_nghiem']?></p>

                                </div>

                            </div>

                        </div>
                        <div class="line" style="margin-top: 20px;"></div>
                        <div style="display: flex; align-items: center;margin-top: 30px;">
                            <div class="date-container">
                                <div class="date-icon">
                                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p style="opacity: 0.5;">Ngành nghề:</p>
                                    <p style="color: blue;"><?echo $nghe_nghiep?></p>
                                </div>
                            </div>


                        </div>



                    </div>

                    <h3 style=" margin-top: 40px; margin-left: 40px;">Mô tả công việc<h2>
                            <h5 style=" margin-top: 40px; margin-left: 40px;" id="mota_congviec">
                               <?echo $row['mo_ta_cong_viec']?>
                            </h5>
                            <h3 style=" margin-top: 40px; margin-left: 40px;">Yêu cầu công việc<h2>
                                    <h5 style=" margin-top: 40px; margin-left: 40px;" id="mota_congviec">
                                        <?echo $row['yeu_cau_cong_viec']?>
                                    </h5>
                                    <h3 style=" margin-top: 40px; margin-left: 40px;">Quyền lợi<h2>
                                            <h5 style=" margin-top: 40px; margin-left: 40px;" id="mota_congviec">
                                            <?echo $row['mo_ta_quyen_loi']?>
                                            </h5>
                                            <h3 style=" margin-top: 40px; margin-left: 40px;">Kỹ năng cần thiết<h2>
                                                    <h5 style=" margin-top: 40px; margin-left: 40px;"
                                                        id="mota_congviec">
                                                        <?echo $row['ky_nang_can_thiet'] ?? null?>
                                                    </h5>
                                                    <h3 style=" margin-top: 40px; margin-left: 40px;">Địa chỉ làm việc
                                                        <h2>

                                                            <h5 style=" margin-top: 40px; margin-left: 40px;"
                                                                id="mota_congviec">
                                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                <?echo $row['so_nha'].",".$quan.",".$thanhpho.",".$quoc_gia?>
                                                            </h5>


                                                            <div class="line" style="margin-top: 20px;"></div>






                </div>
            </div>

            <div class="tab-content" id="tab-company">
            <?php foreach (get_list("SELECT * FROM `nhatuyendung` WHERE `id`='$ntd_id'",$conn) as $rows) {?>
                <form id="company-form" style=" background-color: #fff; ">
                    <div class="hline" style="margin-left: 200px;"></div>

                    <div style="display: flex; align-items: center;margin-top: 30px;">
                        <h3><?echo $rows['name_congty']?></h3> <a href="#" style="color: blue;margin-left: 400px;">Xem trang công ty <i
                                class="fa fa-arrow-right" aria-hidden="true"></i> </a>


                    </div>
                    <div style="display: flex; align-items: center;margin-top: 30px;">
                        <span style="opacity: 0.5; margin-left: 20px;"> <i class="fa fa-map-marker"
                                aria-hidden="true"></i> Địa chỉ:</span>
                        <span style=" margin-left: 20px;"><?echo $row['so_nha'].",".$quan.",".$thanhpho.",".$quoc_gia?></span>
                    </div>
                    <div style="display: flex; align-items: center;margin-top: 30px;">
                        <span style="opacity: 0.5; margin-left: 20px;"> <i class="fa fa-users"
                                aria-hidden="true"></i>Quy mô:</span>
                        <span style=" margin-left: 20px;"> <?echo $rows['quymonhansu']?></span>
                    </div>

                    <h4 style=" margin-left: 20px;margin-top:40px;"> Nhà hàng</h4>
                    <span style=" margin-left: 20px;margin-top:40px;"> Giới thiệu danh nghiệp</span>
                    <div class="line" style="margin-top: 60px;"></div>
                </form>
            <?php }?>
            </div>
        </div>
    <?php }?>


        <div class="menuu" style="width:30%;">
            <div class="search-container" style="margin-top:20px;">
                <input type="text" placeholder="Tìm kiếm...">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                    </svg>
                </button>
            </div>
            <h3 style="color:blue;">Bài Viết Mới Nhất </h3>
            <div class="quangcao1" style="margin-bottom: 40px;">
                <img src="image/quangcao1.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao2" style="margin-bottom: 40px;">
                <img src="image/quangcao2.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao3" style="margin-bottom: 40px;">
                <img src="image/quangcao3.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao4" style="margin-bottom: 40px;">
                <img src="image/quangcao4.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao5" style="margin-bottom: 40px;">
                <img src="image/quangcao5.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao6" style="margin-bottom: 40px;">
                <img src="image/quangcao6.jpg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>


            <div class="quangcao1" style="margin-bottom: 100px;">
                <img src="image/quangcao1.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao2" style="margin-bottom: 40px;">
                <img src="image/quangcao2.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao3" style="margin-bottom: 40px;">
                <img src="image/quangcao3.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao4" style="margin-bottom: 40px;">
                <img src="image/quangcao4.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao5" style="margin-bottom: 40px;">
                <img src="image/quangcao5.jpeg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>
            <div class="quangcao6" style="margin-bottom: 40px;">
                <img src="image/quangcao6.jpg" alt="quangcao1">
                <div class="text">
                    <p>+100 mẫu câu khích lệ Tiếng Hàn hiệu quả nhất</p>
                </div>
            </div>


        </div>
    </div>



























    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            jQuery('a[href*="tel:"]').on('click', function () {
                gtag('event', 'conversion', { 'send_to': 'AW-882166916/ExQfCPj98KIBEISZ06QD' });
            });
        });
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MRGZMJD');
    </script>
    <script>
        // Mở cửa sổ popup
        function openPopup() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }

        // Đóng cửa sổ popup
        function closePopup() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
    <!-- End Google Tag Manager -->
</body>
<script>
    $(function () {
        var offset = 115;
        $(window).scroll(function () {
            if ($(this).scrollTop() > offset) {
                $('.header-bottom').addClass('fixed');
            } else {
                $('.header-bottom').removeClass('fixed');
            }
        });
        if ($(window).scrollTop() > offset) {
            $('.header-bottom').addClass('fixed');
        } else {
            $('.header-bottom').removeClass('fixed');
        }
    });
</script>
<script>
    jQuery(document).ready(function () {
        var offset = 20;
        var duration = 500;
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });

        jQuery('.back-to-top').click(function (event) {
            event.preventDefault();
            jQuery('html, body').animate({ scrollTop: 0 }, duration);
            return false;
        })
    });
</script>
<script>
    function toggleAdvancedFilter() {
        var formSearch = document.getElementById('form-search1');
        if (formSearch.style.display === 'none') {
            formSearch.style.display = 'block';
        } else {
            formSearch.style.display = 'none';
        }
    }
</script>

<script>
    function clearSelection() {
        // Lặp qua tất cả các select và đặt giá trị là rỗng
        var selects = document.getElementsByTagName('select');
        for (var i = 0; i < selects.length; i++) {
            selects[i].value = '';
        }
    }
    document.querySelectorAll('.toggle-button').forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('active');
        });
    });

</script>
<script>
    jQuery(document).ready(function () {
        var offset = 20;
        var duration = 500;
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });

        jQuery('.back-to-top').click(function (event) {
            event.preventDefault();
            jQuery('html, body').animate({ scrollTop: 0 }, duration);
            return false;
        })
    });
    document.addEventListener('DOMContentLoaded', function () {
        document.execCommand('defaultParagraphSeparator', false, 'div');
    });
    document.addEventListener("DOMContentLoaded", function () {
        const tabLinks = document.querySelectorAll(".tab-links a");

        tabLinks.forEach(function (link) {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const targetId = this.getAttribute("href").substring(1);
                const targetTab = document.getElementById(targetId);

                // Ẩn tất cả các tab-content
                document.querySelectorAll(".tab-content").forEach(function (tab) {
                    tab.classList.remove("active");
                });

                // Hiển thị tab-content tương ứng với tab được chọn
                targetTab.classList.add("active");
            });
        });
    });


</script>







</html>