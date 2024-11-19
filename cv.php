<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo CV</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    
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
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            justify-content: space-between;
        }
        .cv-container {
            width: 48%;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border: 1px solid #ddd;
            overflow: hidden;
            position: relative;
            margin-right: 10px; /* Thêm khoảng cách giữa hai cột */
        }
        /* Style cho khung của CV */
        .cv-wrapper {
            background: #fff;
            padding: 40px 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            width: 48%;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .profile-picture img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .personal-info {
            margin-left: 20px;
        }
        .personal-info h1 {
            margin: 0;
            font-size: 2.5em;
            color: #007BFF;
        }
        .personal-info h2 {
            margin: 5px 0;
            color: #666;
        }
        .personal-info p {
            margin: 5px 0;
        }
        section {
            margin-bottom: 20px;
        }
        section h2 {
            border-bottom: 2px solid #007BFF;
            padding-bottom: 10px;
            color: #007BFF;
        }
        .job, .education-item {
            margin-bottom: 15px;
        }
        .job h3, .education-item h3 {
            margin: 0;
            color: #333;
            font-weight: bold;
        }
        ul {
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 5px;
            color: #555;
        }
        .form-container h2 {
            margin-top: 0;
            color: #007BFF;
        }
        form label {
            display: block;
            margin-top: 10px;
            color: #333;
            font-weight: bold;
        }
        form input, form textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        form button {
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
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
                            Cơ hội việc Làm
                              </a>
                             
                           </li>
                           <li class="" >
                              <a href="duhocnghe.php" class=" 'active' ">
                           Quay lại
                              </a>
                           
                           </li>
                           
                         
                        </ul>
                       
                     </nav>
                     <div class="line-menu"></div>
                  </div>
                  
               </div>
               
            </div>
          
         </div>
</head>
<body>
 


        </div>
    <div class="container">
        <div class="cv-container" style="background-color:#E6E6E6">
            <div class="cv-wrapper">
                <header style="background-color:#F2F5A9;">
                    <div class="profile-picture">
                        <img id="profile-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPSN7ftfPrOa9lgPz3DpHMiFXyDX3azYqY86UV7DvAhQ&s" alt="Profile Picture">
                    </div>
                    <div class="personal-info">
                        <h1 id="name">Nguyễn Văn A</h1>
                        <h2 id="job-title">Web Developer</h2>
                        <p id="contact">Email: nguyenvana@example.com | Phone: +84 123 456 789</p>
                        <p id="address">Address: 123 Đường ABC, Quận XYZ, TP.HCM, Việt Nam</p>
                    </div>
                </header>
                <section class="summary">
                    <h2>Tóm tắt</h2>
                    <p id="summary">Tôi là ...</p>
                </section>
                <section class="experience">
                    <h2>Kinh nghiệm làm việc</h2>
                    <div class="job">
                        <h3>Công ty ABC</h3>
                        <p><strong>Vị trí:</strong> ...</p>
                        <p><strong>Thời gian:</strong> 2019 - Hiện tại</p>
                        <ul id="job1-tasks">
                            <li>Phát triển và duy trì các ứng dụng web cho khách hàng.</li>
                            <li>Hợp tác với các nhóm thiết kế và backend để triển khai các tính năng mới.</li>
                            <li>Đào tạo và hướng dẫn các thành viên mới trong nhóm.</li>
                        </ul>
                    </div>
                </section>
                <section class="education">
                    <h2>Học vấn</h2>
                    <div class="education-item">
                        <h3>Đại học Công nghệ Thông tin</h3>
                        <p><strong>Bằng cấp:</strong> Cử nhân Công nghệ Thông tin</p>
                        <p><strong>Thời gian:</strong> 2011 - 2015</p>
                    </div>
                </section>
                <section class="skills">
                    <h2>Kỹ năng</h2>
                    <ul id="skills">
                        <li>HTML, CSS, JavaScript</li>
                        <li>React, Angular</li>
                        <li>Node.js, Express</li>
                        <li>Git, GitHub</li>
                    </ul>
                </section>
                <section class="languages">
                    <h2>Ngôn ngữ</h2>
                    <ul id="languages">
                        <li>Tiếng Việt (Bản ngữ)</li>
                        <li>Tiếng Anh (Thông thạo)</li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="form-container">
            <h2>Chỉnh sửa thông tin CV</h2>
            <form id="cv-form">
                <label for="name-input">Tên:</label>
                <input type="text" id="name-input" placeholder="Nguyễn Văn A"><br>
                <label for="job-title-input">Chức danh:</label>
                <input type="text" id="job-title-input" placeholder="Web Developer"><br>
                <label for="contact-input">Thông tin liên lạc:</label>
                <input type="text" id="contact-input" placeholder="Email: nguyenvana@example.com | Phone: +84 123 456 789"><br>
                <label for="address-input">Địa chỉ:</label>
                <input type="text" id="address-input" placeholder="123 Đường ABC, Quận XYZ, TP.HCM, Việt Nam"><br>
                <label for="summary-input">Tóm tắt:</label>
                <textarea id="summary-input" rows="4" placeholder="Tôi là một Web Developer..."></textarea><br>
                <label for="job1-company-input">Công ty (Kinh nghiệm 1):</label>
                <input type="text" id="job1-company-input" placeholder="Công ty ABC"><br>
                <label for="job1-position-input">Vị trí (Kinh nghiệm 1):</label>
                <input type="text" id="job1-position-input" placeholder="Senior Web Developer"><br>
                <label for="job1-time-input">Thời gian (Kinh nghiệm 1):</label>
                <input type="text" id="job1-time-input" placeholder="2019 - Hiện tại"><br>
                <label for="job1-tasks-input">Nhiệm vụ (Kinh nghiệm 1):</label>
                <textarea id="job1-tasks-input" rows="3" placeholder="Phát triển và duy trì các ứng dụng web..."></textarea><br>
                <label for="edu1-school-input">Trường học (Học vấn):</label>
                <input type="text" id="edu1-school-input" placeholder="Đại học Công nghệ Thông tin"><br>
                <label for="edu1-degree-input">Bằng cấp (Học vấn):</label>
                <input type="text" id="edu1-degree-input" placeholder="Cử nhân Công nghệ Thông tin"><br>
                <label for="edu1-time-input">Thời gian (Học vấn):</label>
                <input type="text" id="edu1-time-input" placeholder="2011 - 2015"><br>
                <label for="skills-input">Kỹ năng:</label>
                <textarea id="skills-input" rows="3" placeholder="HTML, CSS, JavaScript, React, Angular..."></textarea><br>
                <label for="languages-input">Ngôn ngữ:</label>
                <textarea id="languages-input" rows="3" placeholder="Tiếng Việt (Bản ngữ), Tiếng Anh (Thông thạo)..."></textarea><br>
                <label for="profile-img-input">Link ảnh đại diện:</label>
                <input type="text" id="profile-img-input" placeholder="Nhập link ảnh đại diện"><br>
                <button type="button" onclick="updateCV()">Cập nhật CV</button>
                <button type="button" id="download-btn">Download CV as PDF</button>
            </form>
        </div>
    </div>
    <script>
        function updateCV() {
            // Update text fields
            document.getElementById('name').innerText = document.getElementById('name-input').value;
            document.getElementById('job-title').innerText = document.getElementById('job-title-input').value;
            document.getElementById('contact').innerText = document.getElementById('contact-input').value;
            document.getElementById('address').innerText = document.getElementById('address-input').value;
            document.getElementById('summary').innerText = document.getElementById('summary-input').value;
            // Update job 1
            document.querySelector('.experience .job:nth-child(1) h3').innerText = document.getElementById('job1-company-input').value;
            document.querySelector('.experience .job:nth-child(1) p:nth-of-type(1)').innerHTML = '<strong>Vị trí:</strong> ' + document.getElementById('job1-position-input').value;
            document.querySelector('.experience .job:nth-child(1) p:nth-of-type(2)').innerHTML = '<strong>Thời gian:</strong> ' + document.getElementById('job1-time-input').value;
            document.getElementById('job1-tasks').innerHTML = '<li>' + document.getElementById('job1-tasks-input').value.split('\n').join('</li><li>') + '</li>';
            // Update education
            document.querySelector('.education-item h3').innerText = document.getElementById('edu1-school-input').value;
            document.querySelector('.education-item p:nth-of-type(1)').innerHTML = '<strong>Bằng cấp:</strong> ' + document.getElementById('edu1-degree-input').value;
            document.querySelector('.education-item p:nth-of-type(2)').innerHTML = '<strong>Thời gian:</strong> ' + document.getElementById('edu1-time-input').value;
            // Update skills
            document.getElementById('skills').innerHTML = '<li>' + document.getElementById('skills-input').value.split('\n').join('</li><li>') + '</li>';
            // Update languages
            document.getElementById('languages').innerHTML = '<li>' + document.getElementById('languages-input').value.split('\n').join('</li><li>') + '</li>';
            // Update profile picture
            const profileImgInput = document.getElementById('profile-img-input').value;
            document.getElementById('profile-img').src = profileImgInput ? profileImgInput : 'imgs/avatar_cv.jpeg';
        }

        document.getElementById('download-btn').addEventListener('click', function() {
            const { jsPDF } = window.jspdf;
            const pdf = new jsPDF('p', 'pt', 'a4');

            const cvWrapper = document.querySelector('.cv-wrapper');

            html2canvas(cvWrapper, { scale: 2 }).then(canvas => {
                const imgData = canvas.toDataURL('image/png', 0.5);
                const imgWidth = 595.28; // A4 width in points
                const pageHeight = 841.89; // A4 height in points
                const imgHeight = canvas.height * imgWidth / canvas.width;
                let heightLeft = imgHeight;
                let position = 0;

                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;

                while (heightLeft >= 0) {
                    position = heightLeft - imgHeight;
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }

                pdf.save('CV.pdf');
            });
        });
    </script>
</body>
</html>
