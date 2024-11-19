<?php
include "class.database.php";
global $conn;
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if(isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Đã đăng nhập, chuyển hướng đến trang chính
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký nhà tuyển dụng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            width: 700px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 50px;
        }
         
        .container input[type="text"],
        .container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .container select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .container label {
            display: block;
            margin-bottom: 20px; /* Khoảng cách giữa label và input */
        }
        .container input[type="submit"] {
            width: 100%;
            padding: 15px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
        }
        .container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .required {
            color: red;
        }
         
    </style>
</head>
<body>
   



    <div class="container">
        <h2>Đăng ký tài khoản nhà tuyển dụng</h2>
        <div class="register-link" style ="text-align:center;">
            Bạn đã có tài khoản nhà tuyển dụng? <a href="loginntd.php">Đăng nhập</a>.
        </div>
        <hr style="border-top: 0.5px solid : black;margin-bottom: 40px;"> 
        <div style="text-align: center; margin-bottom: 80px;">
            <span style="padding: 0 10px;">Thông tin tài khoản</span>
            <span style="display: inline-block; width: 15%; border-bottom: 1px solid black;"></span>
            <span style="padding: 0 10px;">Thông tin liên hệ</span>
            <span style="display: inline-block; width: 15%; border-bottom: 1px solid black;"></span>
            <span style="padding: 0 10px;">Thông tin công ty</span>
        </div>
    <?php
// Kiểm tra xem form đã được gửi chưa
if ($_POST) {
    // Lấy dữ liệu từ form
    $email = $_POST["email"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $company_name = $_POST["company_name"];
    $tax_id = $_POST["tax_id"];
    $company_size = $_POST["company_size"];
    $continent = $_POST["continent"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $company_address = $_POST["company_address"];
    $linhvuc = $_POST["linhvuc"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Đặt các điều kiện kiểm tra tại đây (ví dụ: kiểm tra tính hợp lệ của dữ liệu, kiểm tra email đã tồn tại trong cơ sở dữ liệu, v.v.)
    $errors = array();

    // Kiểm tra nếu có lỗi
    if (empty($email) || empty($password) || empty($fullname) || empty($phone) || empty($company_name) || empty($tax_id) || empty($continent) || empty($country) || empty($city) || empty($district) || empty($company_address) || empty($linhvuc)) {
        $errors[] = $linhvuc;
    }

    // Nếu không có lỗi, thực hiện thêm tài khoản vào cơ sở dữ liệu (hoặc các hành động khác)
    if (empty($errors)) {
    //   $hashed_password = password_hash($user_pass, PASSWORD_DEFAULT);
									$result=mysqli_query($conn,"SELECT * from nhatuyendung where email='$email' ");
									
									$row=mysqli_fetch_assoc($result);
									//var_dump($row);
									//die;
									if($row){
									    echo "Email đã tồn tại. Vui lòng sử dụng email khác!";
									   
									}
		else {
        $insert_query = "INSERT INTO nhatuyendung (email, password, hoten, sdt, name_congty, masothue, quymonhansu, chauluc, quocgia, tinh, huyen, diachi, linhvuc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insert_query);


$stmt->bind_param("sssssssssssss", $email, $hashed_password, $fullname, $phone, $company_name, $tax_id, $company_size, $continent, $country, $city, $district, $company_address, $linhvuc);

        if ($stmt->execute()) {
        // Sau khi thêm thành công, bạn có thể chuyển hướng người dùng đến trang khác hoặc hiển thị thông báo thành công
        // Ví dụ: header("Location: success.php"); exit;
        session_start();
                                        $_SESSION['ntd_id'] = $stmt->insert_id;

                                        header("Location: index.php");
                                        exit();
        // echo "Đăng ký thành công!";
      }                                  }
    } else {
        // Nếu có lỗi, hiển thị các thông báo lỗi
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>



        <form action="registerntd.php" method="post">
            <label for="email">Địa chỉ email <span class="required">*</span></label>
            <input type="text" id="email" name="email" required>
            <label for="password">Mật khẩu <span class="required">*</span></label>
            <input type="password" id="password" name="password" required>
            <h3>Thông tin liên hệ</h3>
            <label for="fullname">Họ và tên <span class="required">*</span></label>
            <input type="text" id="fullname" name="fullname" required>
            <label for="phone">Số điện thoại <span class="required">*</span></label>
            <input type="text" id="phone" name="phone" required>
            <h3>Thông tin công ty</h3>
            <label for="company_name">Tên công ty <span class="required">*</span></label>
            <input type="text" id="company_name" name="company_name" required>
            <label for="tax_id">Mã số thuế <span class="required">*</span></label>
            <input type="text" id="tax_id" name="tax_id" required>
            <label for="company_size">Quy mô nhân sự</label>
            <input type="text" id="company_size" name="company_size">
            <label for="continent">Châu lục <span class="required">*</span></label>
            <select id="continent" name="continent" onchange="changeCountries()" required>
                <option value="">Chọn châu lục</option>
                <option value="asia">Châu Á</option>
                <option value="europe">Châu Âu</option>
                <option value="america">Châu Mỹ</option>
                <option value="australia">Châu Úc</option>
            </select>
            <label for="country">Quốc gia <span class="required">*</span></label>
            <select id="country" name="country" onchange="changeCities()" required>
                <option value="">Chọn quốc gia</option>
            </select>
            <label for="city">Tỉnh / Thành Phố / Bang <span class="required">*</span></label>
            <select id="city" name="city" onchange="changeDistrict()" required>
                <option value="">Chọn tỉnh/thành phố/bang</option>
            </select>
            
            
            <label for="district">Quận / Huyện / Hạt <span class="required">*</span></label>
                       <select id="district" name="district" required>
                <option value="">Chọn Quận / Huyện / Hạt</option>
            </select>
            <label for="company_address">Địa chỉ công ty <span class="required">*</span></label>
            <input type="text" id="company_address" name="company_address" required>
            <label for="linhvuc">Lĩnh Vực <span class="required">*</span></label>
            <select id="linhvuc" name="linhvuc" onchange="onchangelinhvuc()" required>
                <option value="">Chọn </option>
                <option value="Công Ty">Công Ty</option>
                <option value="Du học nghề">Trường Du Học Nghề</option>
                <option value="Xuất Khẩu lao động">Xuất Khẩu lao động</option>
            </select>
            
            <input type="submit" value="Hoàn Thành Đăng Ký">
             <div class="register-link" style ="text-align:center;margin-top: 40px;opacity: 0.5;font-size: 0.9em;">
            Bằng việc nhấn nút đăng ký , bạn dã đồng ý với <a href="#"> Điều khoản sử dụng </a> của Việc Làm Tại Năm Châu
        </div>
        </form>
    </div>

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

        function changeCities() {
            var countrySelect = document.getElementById("country");
            var citySelect = document.getElementById("city");
            var selectedCountry = countrySelect.value;

            // Xóa tất cả các tùy chọn cũ trong dropdown tỉnh/thành phố/bang
            citySelect.innerHTML = "";

            // Thêm tùy chọn mặc định
            var defaultOption = document.createElement("option");
            defaultOption.text = "Chọn tỉnh/thành phố/bang";
            defaultOption.value = "";
            citySelect.add(defaultOption);

         
            switch (selectedCountry) {
                case "vietnam":
    addOption(citySelect, "Hà Nội", "hanoi");
    addOption(citySelect, "Thành phố Hồ Chí Minh", "hcm");
    addOption(citySelect, "Đà Nẵng", "danang");
    addOption(citySelect, "Hải Phòng", "haiphong");
    // Thêm các tỉnh/thành phố/bang khác của Việt Nam tương ứng
    break;
case "trungquoc":
    addOption(citySelect, "Bắc Kinh", "bac_kinh");
    addOption(citySelect, "Thượng Hải", "thuong_hai");
    addOption(citySelect, "Thâm Quyến", "tham_quyen");
    addOption(citySelect, "Quảng Châu", "quang_chau");

    break;
case "hongkong":
    addOption(citySelect, "Hong Kong Island", "hong_kong_island");
    addOption(citySelect, "Kowloon", "kowloon");
    addOption(citySelect, "New Territories", "new_territories");
 
    break;
case "indo":
    addOption(citySelect, "Jakarta", "jakarta");
    addOption(citySelect, "Surabaya", "surabaya");
    addOption(citySelect, "Bandung", "bandung");
    // Thêm các tỉnh/thành phố/bang khác của Indonesia tương ứng
    break;
case "ando":
    addOption(citySelect, "New Delhi", "new_delhi");
    addOption(citySelect, "Mumbai", "mumbai");
    addOption(citySelect, "Bangalore", "bangalore");
    // Thêm các tỉnh/thành phố/bang khác của Ấn Độ tương ứng
    break;
case "nhat":
    addOption(citySelect, "Tokyo", "tokyo");
    addOption(citySelect, "Osaka", "osaka");
    addOption(citySelect, "Kyoto", "kyoto");
    // Thêm các tỉnh/thành phố/bang khác của Nhật Bản tương ứng
    break;
case "malay":
    addOption(citySelect, "Kuala Lumpur", "kuala_lumpur");
    addOption(citySelect, "George Town", "george_town");
    addOption(citySelect, "Ipoh", "ipoh");
    // Thêm các tỉnh/thành phố/bang khác của Malaysia tương ứng
    break;
case "new":
    addOption(citySelect, "Auckland", "auckland");
    addOption(citySelect, "Wellington", "wellington");
    addOption(citySelect, "Christchurch", "christchurch");
    // Thêm các tỉnh/thành phố/bang khác của New Zealand tương ứng
    break;
case "philip":
    addOption(citySelect, "Manila", "manila");
    addOption(citySelect, "Cebu City", "cebu_city");
    addOption(citySelect, "Davao City", "davao_city");
    // Thêm các tỉnh/thành phố/bang khác của Philippines tương ứng
    break;
case "arap":
    addOption(citySelect, "Riyadh", "riyadh");
    addOption(citySelect, "Jeddah", "jeddah");
    addOption(citySelect, "Mecca", "mecca");
    // Thêm các tỉnh/thành phố/bang khác của Ả Rập Saudi tương ứng
    break;
case "sing":
    addOption(citySelect, "Singapore", "singapore");
    // Thêm các tỉnh/thành phố/bang khác của Singapore tương ứng
    break;
case "thailan":
    addOption(citySelect, "Bangkok", "bangkok");
    addOption(citySelect, "Chiang Mai", "chiang_mai");
    addOption(citySelect, "Phuket", "phuket");
    // Thêm các tỉnh/thành phố/bang khác của Thái Lan tương ứng
    break;
case "dailoan":
    addOption(citySelect, "Đài Bắc", "dai_bac");
    addOption(citySelect, "Đài Trung", "dai_trung");
    addOption(citySelect, "Đài Nam", "dai_nam");
    // Thêm các tỉnh/thành phố/bang khác của Đài Loan tương ứng
    break;
case "tieuvuong":
    addOption(citySelect, "Abu Dhabi", "abu_dhabi");
    addOption(citySelect, "Dubai", "dubai");
    addOption(citySelect, "Sharjah", "sharjah");
    // Thêm các tỉnh/thành phố/bang khác của Tiểu vương quốc Ả Rập tương ứng
    break;
    case "bi":
    addOption(citySelect, "Brussels", "brussels");
    addOption(citySelect, "Antwerp", "antwerp");
    addOption(citySelect, "Ghent", "ghent");
    // Thêm các tỉnh/thành phố/bang khác của Bỉ tương ứng
    break;
case "sec":
    addOption(citySelect, "Prague", "prague");
    addOption(citySelect, "Brno", "brno");
    addOption(citySelect, "Ostrava", "ostrava");
    // Thêm các tỉnh/thành phố/bang khác của Cộng hòa Séc tương ứng
    break;
case "duc":
    addOption(citySelect, "Berlin", "berlin");
    addOption(citySelect, "Hamburg", "hamburg");
    addOption(citySelect, "Munich", "munich");
    // Thêm các tỉnh/thành phố/bang khác của Đức tương ứng
    break;
case "danmach":
    addOption(citySelect, "Copenhagen", "copenhagen");
    addOption(citySelect, "Aarhus", "aarhus");
    addOption(citySelect, "Odense", "odense");
    // Thêm các tỉnh/thành phố/bang khác của Đan Mạch tương ứng
    break;
case "taybannha":
    addOption(citySelect, "Madrid", "madrid");
    addOption(citySelect, "Barcelona", "barcelona");
    addOption(citySelect, "Valencia", "valencia");
    // Thêm các tỉnh/thành phố/bang khác của Tây Ban Nha tương ứng
    break;
case "phap":
    addOption(citySelect, "Paris", "paris");
    addOption(citySelect, "Marseille", "marseille");
    addOption(citySelect, "Lyon", "lyon");
    // Thêm các tỉnh/thành phố/bang khác của Pháp tương ứng
    break;
case "ireland":
    addOption(citySelect, "Dublin", "dublin");
    addOption(citySelect, "Cork", "cork");
    addOption(citySelect, "Galway", "galway");
    // Thêm các tỉnh/thành phố/bang khác của Ireland tương ứng
    break;
case "y":
    addOption(citySelect, "Rome", "rome");
    addOption(citySelect, "Milan", "milan");
    addOption(citySelect, "Naples", "naples");
    // Thêm các tỉnh/thành phố/bang khác của Ý tương ứng
    break;
case "hun":
    addOption(citySelect, "Budapest", "budapest");
    addOption(citySelect, "Debrecen", "debrecen");
    addOption(citySelect, "Szeged", "szeged");
    // Thêm các tỉnh/thành phố/bang khác của Hungary tương ứng
    break;
case "halan":
    addOption(citySelect, "Amsterdam", "amsterdam");
    addOption(citySelect, "Rotterdam", "rotterdam");
    addOption(citySelect, "The Hague", "the_hague");
    // Thêm các tỉnh/thành phố/bang khác của Hà Lan tương ứng
    break;
case "ao":
    addOption(citySelect, "Vienna", "vienna");
    addOption(citySelect, "Graz", "graz");
    addOption(citySelect, "Linz", "linz");
    // Thêm các tỉnh/thành phố/bang khác của Áo tương ứng
    break;
case "balan":
    addOption(citySelect, "Warsaw", "warsaw");
    addOption(citySelect, "Kraków", "krakow");
    addOption(citySelect, "Łódź", "lodz");
    // Thêm các tỉnh/thành phố/bang khác của Ba Lan tương ứng
    break;
case "bodaonha":
    addOption(citySelect, "Lisbon", "lisbon");
    addOption(citySelect, "Porto", "porto");
    addOption(citySelect, "Faro", "faro");
    // Thêm các tỉnh/thành phố/bang khác của Bồ Đào Nha tương ứng
    break;
case "nga":
    addOption(citySelect, "Moscow", "moscow");
    addOption(citySelect, "Saint Petersburg", "saint_petersburg");
    addOption(citySelect, "Novosibirsk", "novosibirsk");
    // Thêm các tỉnh/thành phố/bang khác của Nga tương ứng
    break;
case "thuysi":
    addOption(citySelect, "Zurich", "zurich");
    addOption(citySelect, "Geneva", "geneva");
    addOption(citySelect, "Basel", "basel");
    // Thêm các tỉnh/thành phố/bang khác của Thuỵ Sĩ tương ứng
    break;
case "thuydien":
    addOption(citySelect, "Stockholm", "stockholm");
    addOption(citySelect, "Gothenburg", "gothenburg");
    addOption(citySelect, "Malmö", "malmo");
    // Thêm các tỉnh/thành phố/bang khác của Thuỵ Điển tương ứng
    break;
case "thonhiki":
    addOption(citySelect, "Istanbul", "istanbul");
    addOption(citySelect, "Ankara", "ankara");
    addOption(citySelect, "Izmir", "izmir");
    // Thêm các tỉnh/thành phố/bang khác của Thổ Nhĩ Kỳ tương ứng
    break;
case "ukraina":
    addOption(citySelect, "Kyiv", "kyiv");
    addOption(citySelect, "Kharkiv", "kharkiv");
    addOption(citySelect, "Odesa", "odesa");
    // Thêm các tỉnh/thành phố/bang khác của Ukraina tương ứng
    break;
case "anh":
    addOption(citySelect, "London", "london");
    addOption(citySelect, "Manchester", "manchester");
    addOption(citySelect, "Birmingham", "birmingham");
    // Thêm các tỉnh/thành phố/bang khác của Vương quốc Anh tương ứng
    break;
case "argentine":
    addOption(citySelect, "Buenos Aires", "buenos_aires");
    addOption(citySelect, "Córdoba", "cordoba");
    addOption(citySelect, "Rosario", "rosario");
    // Thêm các tỉnh/thành phố/bang khác của Argentina tương ứng
    break;
case "brasi":
    addOption(citySelect, "São Paulo", "sao_paulo");
    addOption(citySelect, "Rio de Janeiro", "rio_de_janeiro");
    addOption(citySelect, "Brasília", "brasilia");
    // Thêm các tỉnh/thành phố/bang khác của Brasil tương ứng
    break;
case "canada":
    addOption(citySelect, "Toronto", "toronto");
    addOption(citySelect, "Montreal", "montreal");
    addOption(citySelect, "Vancouver", "vancouver");
    // Thêm các tỉnh/thành phố/bang khác của Canada tương ứng
    break;
case "chile":
    addOption(citySelect, "Santiago", "santiago");
    addOption(citySelect, "Valparaíso", "valparaiso");
    addOption(citySelect, "Concepción", "concepcion");
    // Thêm các tỉnh/thành phố/bang khác của Chile tương ứng
    break;
case "colo":
    addOption(citySelect, "Bogotá", "bogota");
    addOption(citySelect, "Medellín", "medellin");
    addOption(citySelect, "Cali", "cali");
    // Thêm các tỉnh/thành phố/bang khác của Colombia tương ứng
    break;
case "mexi":
    addOption(citySelect, "Mexico City", "mexico_city");
    addOption(citySelect, "Guadalajara", "guadalajara");
    addOption(citySelect, "Monterrey", "monterrey");
    // Thêm các tỉnh/thành phố/bang khác của Mexico tương ứng
    break;
case "han":
    addOption(citySelect, "Seoul", "seoul");
    addOption(citySelect, "Busan", "busan");
    addOption(citySelect, "Incheon", "incheon");
    // Thêm các tỉnh/thành phố/bang khác của Hàn Quốc tương ứng
    break;
case "hoaky":
    addOption(citySelect, "New York City", "new_york_city");
    addOption(citySelect, "Los Angeles", "los_angeles");
    addOption(citySelect, "Chicago", "chicago");
    // Thêm các tỉnh/thành phố/bang khác của Hoa Kỳ tương ứng
    break;
case "uru":
    addOption(citySelect, "Montevideo", "montevideo");
    addOption(citySelect, "Salto", "salto");
    addOption(citySelect, "Ciudad de la Costa", "ciudad_de_la_costa");
    // Thêm các tỉnh/thành phố/bang khác của Uruguay tương ứng
    break;
case "vene":
    addOption(citySelect, "Caracas", "caracas");
    addOption(citySelect, "Maracaibo", "maracaibo");
    addOption(citySelect, "Valencia", "valencia_venezuela");
    // Thêm các tỉnh/thành phố/bang khác của Venezuela tương ứng
    break;
case "australia":
    addOption(citySelect, "Sydney", "sydney");
    addOption(citySelect, "Melbourne", "melbourne");
    addOption(citySelect, "Brisbane", "brisbane");
        break;

default:
    break;

            }
        }

      
        function changeDistrict() {
    var citySelect = document.getElementById("city");
    var districtSelect = document.getElementById("district");
    var selectedCity = citySelect.value;

   
    districtSelect.innerHTML = "";


    var defaultOption = document.createElement("option");
    defaultOption.text = "Chọn quận/huyện/hạt";
    defaultOption.value = "";

    districtSelect.add(defaultOption);

 
    switch (selectedCity) {
        case "hanoi":
            addOption(districtSelect, "Ba Đình", "ba_dinh");
            addOption(districtSelect, "Hoàn Kiếm", "hoan_kiem");
            addOption(districtSelect, "Cầu Giấy", "cau_giay");
        
            break;
        case "hcm":
            addOption(districtSelect, "Quận 1", "quan_1");
            addOption(districtSelect, "Quận 2", "quan_2");
            addOption(districtSelect, "Quận 3", "quan_3");
   
            break;
        case "danang":
            addOption(districtSelect, "Quận Hải Châu", "hai_chau");
            addOption(districtSelect, "Quận Thanh Khê", "thanh_khe");
            addOption(districtSelect, "Quận Sơn Trà", "son_tra");
         
            break;
       
       case "bac_kinh":
    addOption(districtSelect, "Dongcheng", "dongcheng");
    addOption(districtSelect, "Xicheng", "xicheng");
    addOption(districtSelect, "Chaoyang", "chaoyang");
   
    break;
    case "haiphong":
    addOption(districtSelect, "Hồng Bàng", "hong_bang");
    addOption(districtSelect, "Ngô Quyền", "ngo_quyen");
    addOption(districtSelect, "Lê Chân", "le_chan");

    break;


case "thuong_hai":
    addOption(districtSelect, "Pudong", "pudong");
    addOption(districtSelect, "Puxi", "puxi");
    addOption(districtSelect, "Xuhui", "xuhui");

    break;

case "tham_quyen":
    addOption(districtSelect, "Luohu", "luohu");
    addOption(districtSelect, "Nanshan", "nanshan");
    addOption(districtSelect, "Futian", "futian");
 
    break;

case "quang_chau":
    addOption(districtSelect, "Liwan", "liwan");
    addOption(districtSelect, "Yuexiu", "yuexiu");
    addOption(districtSelect, "Tianhe", "tianhe");
   
    break;
    case "hong_kong_island":
    addOption(districtSelect, "Central and Western", "central_and_western");
    addOption(districtSelect, "Eastern", "eastern");
    addOption(districtSelect, "Southern", "southern");
    addOption(districtSelect, "Wan Chai", "wan_chai");
    // Thêm các quận/huyện/hạt khác của Hong Kong Island tương ứng
    break;

case "kowloon":
    addOption(districtSelect, "Kowloon City", "kowloon_city");
    addOption(districtSelect, "Kwun Tong", "kwun_tong");
    addOption(districtSelect, "Sham Shui Po", "sham_shui_po");
    addOption(districtSelect, "Wong Tai Sin", "wong_tai_sin");
    // Thêm các quận/huyện/hạt khác của Kowloon tương ứng
    break;

case "new_territories":
    addOption(districtSelect, "Islands", "islands");
    addOption(districtSelect, "Kwai Tsing", "kwai_tsing");
    addOption(districtSelect, "North", "north");
    addOption(districtSelect, "Sai Kung", "sai_kung");
    // Thêm các quận/huyện/hạt khác của New Territories tương ứng
    break;
    case "jakarta":
    addOption(districtSelect, "Central Jakarta", "central_jakarta");
    addOption(districtSelect, "West Jakarta", "west_jakarta");
    addOption(districtSelect, "South Jakarta", "south_jakarta");
    addOption(districtSelect, "East Jakarta", "east_jakarta");
    // Thêm các quận/huyện/hạt khác của Jakarta tương ứng
    break;

case "surabaya":
    addOption(districtSelect, "Surabaya Utara (North Surabaya)", "surabaya_utara");
    addOption(districtSelect, "Surabaya Timur (East Surabaya)", "surabaya_timur");
    addOption(districtSelect, "Surabaya Selatan (South Surabaya)", "surabaya_selatan");
    addOption(districtSelect, "Surabaya Barat (West Surabaya)", "surabaya_barat");
    // Thêm các quận/huyện/hạt khác của Surabaya tương ứng
    break;

case "bandung":
    addOption(districtSelect, "Bandung Kulon (West Bandung)", "bandung_kulon");
    addOption(districtSelect, "Bandung Wetan (East Bandung)", "bandung_wetan");
    addOption(districtSelect, "Bandung Kidul (South Bandung)", "bandung_kidul");
    addOption(districtSelect, "Bandung Utara (North Bandung)", "bandung_utara");
    // Thêm các quận/huyện/hạt khác của Bandung tương ứng
    break;
    case "new_delhi":
    addOption(districtSelect, "Central Delhi", "central_delhi");
    addOption(districtSelect, "East Delhi", "east_delhi");
    addOption(districtSelect, "North Delhi", "north_delhi");
    // Thêm các quận/huyện/hạt khác của New Delhi tương ứng
    break;

case "mumbai":
    addOption(districtSelect, "South Mumbai", "south_mumbai");
    addOption(districtSelect, "Western Suburbs", "western_suburbs");
    addOption(districtSelect, "Eastern Suburbs", "eastern_suburbs");
    // Thêm các quận/huyện/hạt khác của Mumbai tương ứng
    break;

case "bangalore":
    addOption(districtSelect, "North Bangalore", "north_bangalore");
    addOption(districtSelect, "South Bangalore", "south_bangalore");
    addOption(districtSelect, "East Bangalore", "east_bangalore");
    // Thêm các quận/huyện/hạt khác của Bangalore tương ứng
    break;

case "tokyo":
    addOption(districtSelect, "Shinjuku", "shinjuku");
    addOption(districtSelect, "Shibuya", "shibuya");
    addOption(districtSelect, "Chiyoda", "chiyoda");
    // Thêm các quận/huyện/hạt khác của Tokyo tương ứng
    break;

case "osaka":
    addOption(districtSelect, "Chūō-ku", "chuo_ku");
    addOption(districtSelect, "Fukushima-ku", "fukushima_ku");
    addOption(districtSelect, "Naniwa-ku", "naniwa_ku");
    // Thêm các quận/huyện/hạt khác của Osaka tương ứng
    break;

case "kyoto":
    addOption(districtSelect, "Shimogyō-ku", "shimogyo_ku");
    addOption(districtSelect, "Sakyō-ku", "sakyo_ku");
    addOption(districtSelect, "Fushimi-ku", "fushimi_ku");
    // Thêm các quận/huyện/hạt khác của Kyoto tương ứng
    break;

case "kuala_lumpur":
    addOption(districtSelect, "Bangsar", "bangsar");
    addOption(districtSelect, "Petaling Jaya", "petaling_jaya");
    addOption(districtSelect, "Subang Jaya", "subang_jaya");
    // Thêm các quận/huyện/hạt khác của Kuala Lumpur tương ứng
    break;

case "george_town":
    addOption(districtSelect, "George Town City Centre", "george_town_city_centre");
    addOption(districtSelect, "Tanjung Bungah", "tanjung_bungah");
    addOption(districtSelect, "Gelugor", "gelugor");
    // Thêm các quận/huyện/hạt khác của George Town tương ứng
    break;

case "ipoh":
    addOption(districtSelect, "Ipoh City Centre", "ipoh_city_centre");
    addOption(districtSelect, "Kinta", "kinta");
    addOption(districtSelect, "Menglembu", "menglembu");
    // Thêm các quận/huyện/hạt khác của Ipoh tương ứng
    break;

case "auckland":
    addOption(districtSelect, "Auckland Central", "auckland_central");
    addOption(districtSelect, "North Shore", "north_shore");
    addOption(districtSelect, "Waitakere", "waitakere");
    // Thêm các quận/huyện/hạt khác của Auckland tương ứng
    break;

case "wellington":
    addOption(districtSelect, "Wellington City", "wellington_city");
    addOption(districtSelect, "Lower Hutt", "lower_hutt");
    addOption(districtSelect, "Upper Hutt", "upper_hutt");
    // Thêm các quận/huyện/hạt khác của Wellington tương ứng
    break;

case "christchurch":
    addOption(districtSelect, "Christchurch Central", "christchurch_central");
    addOption(districtSelect, "Riccarton", "riccarton");
    addOption(districtSelect, "Hornby", "hornby");
    // Thêm các quận/huyện/hạt khác của Christchurch tương ứng
    break;
    case "manila":
    addOption(districtSelect, "Quận Binondo", "binondo");
    addOption(districtSelect, "Quận Ermita", "ermita");
    addOption(districtSelect, "Quận Intramuros", "intramuros");
    // Thêm các quận/huyện/hạt khác của Manila tương ứng
    break;
case "cebu_city":
    addOption(districtSelect, "Quận Cebu", "cebu_district");
    addOption(districtSelect, "Quận Lapu-Lapu", "lapu_lapu");
    addOption(districtSelect, "Quận Mandaue", "mandaue");
    // Thêm các quận/huyện/hạt khác của Cebu City tương ứng
    break;

case "davao_city":
    addOption(districtSelect, "Quận Davao", "davao_district");
    addOption(districtSelect, "Quận Panabo", "panabo");
    addOption(districtSelect, "Quận Tagum", "tagum");
    // Thêm các quận/huyện/hạt khác của Davao City tương ứng
    break;
    case "riyadh":
    addOption(districtSelect, "Quận Al Olaya", "al_olaya");
    addOption(districtSelect, "Quận Al Batha", "al_batha");
    addOption(districtSelect, "Quận Al Malaz", "al_malaz");
    // Thêm các quận/huyện/hạt khác của Riyadh tương ứng
    break;

case "jeddah":
    addOption(districtSelect, "Quận Al Balad", "al_balad");
    addOption(districtSelect, "Quận Al Hamra", "al_hamra");
    addOption(districtSelect, "Quận Al Rawdah", "al_rawdah");
    // Thêm các quận/huyện/hạt khác của Jeddah tương ứng
    break;

case "mecca":
    addOption(districtSelect, "Quận Al Aziziyah", "al_aziziyah");
    addOption(districtSelect, "Quận Al Shisha", "al_shisha");
    addOption(districtSelect, "Quận Al Misfalah", "al_misfalah");
    // Thêm các quận/huyện/hạt khác của Mecca tương ứng
    break;
    case "singapore":
    addOption(districtSelect, "Central Area", "central_area");
    addOption(districtSelect, "Jurong East", "jurong_east");
    addOption(districtSelect, "Bedok", "bedok");
    // Thêm các quận/huyện/hạt khác của Singapore tương ứng
    break;
    case "bangkok":
    addOption(districtSelect, "Bangkok District 1", "bangkok_district_1");
    addOption(districtSelect, "Bangkok District 2", "bangkok_district_2");
    addOption(districtSelect, "Bangkok District 3", "bangkok_district_3");
    // Thêm các quận/huyện/hạt khác của Bangkok tương ứng
    break;

case "chiang_mai":
    addOption(districtSelect, "Chiang Mai District 1", "chiang_mai_district_1");
    addOption(districtSelect, "Chiang Mai District 2", "chiang_mai_district_2");
    addOption(districtSelect, "Chiang Mai District 3", "chiang_mai_district_3");
    // Thêm các quận/huyện/hạt khác của Chiang Mai tương ứng
    break;

case "phuket":
    addOption(districtSelect, "Phuket District 1", "phuket_district_1");
    addOption(districtSelect, "Phuket District 2", "phuket_district_2");
    addOption(districtSelect, "Phuket District 3", "phuket_district_3");
    // Thêm các quận/huyện/hạt khác của Phuket tương ứng
    break;

case "dai_bac":
    addOption(districtSelect, "Đài Bắc District 1", "dai_bac_district_1");
    addOption(districtSelect, "Đài Bắc District 2", "dai_bac_district_2");
    addOption(districtSelect, "Đài Bắc District 3", "dai_bac_district_3");
    // Thêm các quận/huyện/hạt khác của Đài Bắc tương ứng
    break;

case "dai_trung":
    addOption(districtSelect, "Đài Trung District 1", "dai_trung_district_1");
    addOption(districtSelect, "Đài Trung District 2", "dai_trung_district_2");
    addOption(districtSelect, "Đài Trung District 3", "dai_trung_district_3");
    // Thêm các quận/huyện/hạt khác của Đài Trung tương ứng
    break;

case "dai_nam":
    addOption(districtSelect, "Đài Nam District 1", "dai_nam_district_1");
    addOption(districtSelect, "Đài Nam District 2", "dai_nam_district_2");
    addOption(districtSelect, "Đài Nam District 3", "dai_nam_district_3");
    // Thêm các quận/huyện/hạt khác của Đài Nam tương ứng
    break;
    case "mexico_city":
    addOption(districtSelect, "Mexico City District 1", "mexico_city_district_1");
    addOption(districtSelect, "Mexico City District 2", "mexico_city_district_2");
    addOption(districtSelect, "Mexico City District 3", "mexico_city_district_3");
    // Thêm các quận/huyện/hạt khác của Mexico City tương ứng
    break;

case "guadalajara":
    addOption(districtSelect, "Guadalajara District 1", "guadalajara_district_1");
    addOption(districtSelect, "Guadalajara District 2", "guadalajara_district_2");
    addOption(districtSelect, "Guadalajara District 3", "guadalajara_district_3");
    // Thêm các quận/huyện/hạt khác của Guadalajara tương ứng
    break;

case "monterrey":
    addOption(districtSelect, "Monterrey District 1", "monterrey_district_1");
    addOption(districtSelect, "Monterrey District 2", "monterrey_district_2");
    addOption(districtSelect, "Monterrey District 3", "monterrey_district_3");
    // Thêm các quận/huyện/hạt khác của Monterrey tương ứng
    break;

case "seoul":
    addOption(districtSelect, "Seoul District 1", "seoul_district_1");
    addOption(districtSelect, "Seoul District 2", "seoul_district_2");
    addOption(districtSelect, "Seoul District 3", "seoul_district_3");
    // Thêm các quận/huyện/hạt khác của Seoul tương ứng
    break;

case "busan":
    addOption(districtSelect, "Busan District 1", "busan_district_1");
    addOption(districtSelect, "Busan District 2", "busan_district_2");
    addOption(districtSelect, "Busan District 3", "busan_district_3");
    // Thêm các quận/huyện/hạt khác của Busan tương ứng
    break;

case "incheon":
    addOption(districtSelect, "Incheon District 1", "incheon_district_1");
    addOption(districtSelect, "Incheon District 2", "incheon_district_2");
    addOption(districtSelect, "Incheon District 3", "incheon_district_3");
    // Thêm các quận/huyện/hạt khác của Incheon tương ứng
    break;

case "new_york_city":
    addOption(districtSelect, "New York City District 1", "new_york_city_district_1");
    addOption(districtSelect, "New York City District 2", "new_york_city_district_2");
    addOption(districtSelect, "New York City District 3", "new_york_city_district_3");
    // Thêm các quận/huyện/hạt khác của New York City tương ứng
    break;

case "los_angeles":
    addOption(districtSelect, "Los Angeles District 1", "los_angeles_district_1");
    addOption(districtSelect, "Los Angeles District 2", "los_angeles_district_2");
    addOption(districtSelect, "Los Angeles District 3", "los_angeles_district_3");
    // Thêm các quận/huyện/hạt khác của Los Angeles tương ứng
    break;

case "chicago":
    addOption(districtSelect, "Chicago District 1", "chicago_district_1");
    addOption(districtSelect, "Chicago District 2", "chicago_district_2");
    addOption(districtSelect, "Chicago District 3", "chicago_district_3");
    // Thêm các quận/huyện/hạt khác của Chicago tương ứng
    break;

case "montevideo":
    addOption(districtSelect, "Montevideo District 1", "montevideo_district_1");
    addOption(districtSelect, "Montevideo District 2", "montevideo_district_2");
    addOption(districtSelect, "Montevideo District 3", "montevideo_district_3");
    // Thêm các quận/huyện/hạt khác của Mont
 break;
 case "salto":
    addOption(districtSelect, "Salto District 1", "salto_district_1");
    addOption(districtSelect, "Salto District 2", "salto_district_2");
    addOption(districtSelect, "Salto District 3", "salto_district_3");
    // Thêm các quận/huyện/hạt khác của Salto tương ứng
    break;

case "ciudad_de_la_costa":
    addOption(districtSelect, "Ciudad de la Costa District 1", "ciudad_de_la_costa_district_1");
    addOption(districtSelect, "Ciudad de la Costa District 2", "ciudad_de_la_costa_district_2");
    addOption(districtSelect, "Ciudad de la Costa District 3", "ciudad_de_la_costa_district_3");
    // Thêm các quận/huyện/hạt khác của Ciudad de la Costa tương ứng
    break;

case "caracas":
    addOption(districtSelect, "Caracas District 1", "caracas_district_1");
    addOption(districtSelect, "Caracas District 2", "caracas_district_2");
    addOption(districtSelect, "Caracas District 3", "caracas_district_3");
    // Thêm các quận/huyện/hạt khác của Caracas tương ứng
    break;

case "maracaibo":
    addOption(districtSelect, "Maracaibo District 1", "maracaibo_district_1");
    addOption(districtSelect, "Maracaibo District 2", "maracaibo_district_2");
    addOption(districtSelect, "Maracaibo District 3", "maracaibo_district_3");
    // Thêm các quận/huyện/hạt khác của Maracaibo tương ứng
    break;

case "valencia_venezuela":
    addOption(districtSelect, "Valencia District 1", "valencia_district_1");
    addOption(districtSelect, "Valencia District 2", "valencia_district_2");
    addOption(districtSelect, "Valencia District 3", "valencia_district_3");
    // Thêm các quận/huyện/hạt khác của Valencia tương ứng
    break;

case "sydney":
    addOption(districtSelect, "Sydney District 1", "sydney_district_1");
    addOption(districtSelect, "Sydney District 2", "sydney_district_2");
    addOption(districtSelect, "Sydney District 3", "sydney_district_3");
    // Thêm các quận/huyện/hạt khác của Sydney tương ứng
    break;

case "melbourne":
    addOption(districtSelect, "Melbourne District 1", "melbourne_district_1");
    addOption(districtSelect, "Melbourne District 2", "melbourne_district_2");
    addOption(districtSelect, "Melbourne District 3", "melbourne_district_3");
    // Thêm các quận/huyện/hạt khác của Melbourne tương ứng
    break;

case "brisbane":
    addOption(districtSelect, "Brisbane District 1", "brisbane_district_1");
    addOption(districtSelect, "Brisbane District 2", "brisbane_district_2");
    addOption(districtSelect, "Brisbane District 3", "brisbane_district_3");
    // Thêm các quận/huyện/hạt khác của Brisbane tương ứng
    break;
    case "kyiv":
    addOption(districtSelect, "Kyiv District 1", "kyiv_district_1");
    addOption(districtSelect, "Kyiv District 2", "kyiv_district_2");
    addOption(districtSelect, "Kyiv District 3", "kyiv_district_3");
    // Thêm các quận/huyện/hạt khác của Kyiv tương ứng
    break;

case "kharkiv":
    addOption(districtSelect, "Kharkiv District 1", "kharkiv_district_1");
    addOption(districtSelect, "Kharkiv District 2", "kharkiv_district_2");
    addOption(districtSelect, "Kharkiv District 3", "kharkiv_district_3");
    // Thêm các quận/huyện/hạt khác của Kharkiv tương ứng
    break;

case "odesa":
    addOption(districtSelect, "Odesa District 1", "odesa_district_1");
    addOption(districtSelect, "Odesa District 2", "odesa_district_2");
    addOption(districtSelect, "Odesa District 3", "odesa_district_3");
    // Thêm các quận/huyện/hạt khác của Odesa tương ứng
    break;

case "london":
    addOption(districtSelect, "London Borough 1", "london_borough_1");
    addOption(districtSelect, "London Borough 2", "london_borough_2");
    addOption(districtSelect, "London Borough 3", "london_borough_3");
    // Thêm các quận/huyện/hạt khác của London tương ứng
    break;

case "manchester":
    addOption(districtSelect, "Manchester District 1", "manchester_district_1");
    addOption(districtSelect, "Manchester District 2", "manchester_district_2");
    addOption(districtSelect, "Manchester District 3", "manchester_district_3");
    // Thêm các quận/huyện/hạt khác của Manchester tương ứng
    break;

case "birmingham":
    addOption(districtSelect, "Birmingham District 1", "birmingham_district_1");
    addOption(districtSelect, "Birmingham District 2", "birmingham_district_2");
    addOption(districtSelect, "Birmingham District 3", "birmingham_district_3");
    // Thêm các quận/huyện/hạt khác của Birmingham tương ứng
    break;

case "buenos_aires":
    addOption(districtSelect, "Buenos Aires District 1", "buenos_aires_district_1");
    addOption(districtSelect, "Buenos Aires District 2", "buenos_aires_district_2");
    addOption(districtSelect, "Buenos Aires District 3", "buenos_aires_district_3");
    // Thêm các quận/huyện/hạt khác của Buenos Aires tương ứng
    break;

case "cordoba":
    addOption(districtSelect, "Córdoba District 1", "cordoba_district_1");
    addOption(districtSelect, "Córdoba District 2", "cordoba_district_2");
    addOption(districtSelect, "Córdoba District 3", "cordoba_district_3");
    // Thêm các quận/huyện/hạt khác của Córdoba tương ứng
    break;

case "rosario":
    addOption(districtSelect, "Rosario District 1", "rosario_district_1");
    addOption(districtSelect, "Rosario District 2", "rosario_district_2");
    addOption(districtSelect, "Rosario District 3", "rosario_district_3");
    // Thêm các quận/huyện/hạt khác của Rosario tương ứng
    break;



case "sao_paulo":
    addOption(districtSelect, "São Paulo District 1", "sao_paulo_district_1");
    addOption(districtSelect, "São Paulo District 2", "sao_paulo_district_2");
    addOption(districtSelect, "São Paulo District 3", "sao_paulo_district_3");
    // Thêm các quận/huyện/hạt khác của São Paulo tương ứng
    break;

case "rio_de_janeiro":
    addOption(districtSelect, "Rio de Janeiro District 1", "rio_de_janeiro_district_1");
    addOption(districtSelect, "Rio de Janeiro District 2", "rio_de_janeiro_district_2");
    addOption(districtSelect, "Rio de Janeiro District 3", "rio_de_janeiro_district_3");
    // Thêm các quận/huyện/hạt khác của Rio de Janeiro tương ứng
    break;

case "brasilia":
    addOption(districtSelect, "Brasília District 1", "brasilia_district_1");
    addOption(districtSelect, "Brasília District 2", "brasilia_district_2");
    addOption(districtSelect, "Brasília District 3", "brasilia_district_3");
    // Thêm các quận/huyện/hạt khác của Brasília tương ứng
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
</body>
</html>
