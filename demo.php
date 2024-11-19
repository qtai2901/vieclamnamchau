<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Templates</title>
   <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

header {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

header h1 {
    margin: 0 0 10px;
}

header .filter {
    display: flex;
    align-items: center;
}

header .filter label {
    margin-right: 10px;
}

main {
    padding: 20px;
}

.cv-templates {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.cv-template {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    width: 200px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    position: relative;
}

.cv-template img {
    width: 100%;
    cursor: pointer;
}

.use-template-button {
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    width: 80%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    opacity: 0;
    transition: opacity 0.3s;
}

.cv-template:hover .use-template-button {
    display: block;
    opacity: 1;
}

.use-template-button:hover {
    background-color: rgba(0, 0, 0, 0.9);
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
    position: relative;
    text-align: center;
}

.close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close-button:hover,
.close-button:focus {
    color: black;
}


   </style>
    
</head>
<body>
    <header>
        <h1>Danh sách các mẫu CV được Top nhà tuyển dụng ưa thích</h1>
        <div class="filter">
            <label for="filter">Lọc theo chủ đề:</label>
            <select id="filter">
                <option value="all">Tất cả</option>
                <option value="simple">Đơn giản</option>
                <option value="modern">Hiện đại</option>
                <option value="creative">Sáng tạo</option>
                <option value="professional">Chuyên nghiệp</option>
            </select>
        </div>
    </header>
    <main>
        <div class="cv-templates">
            <div class="cv-template" data-category="simple professional" >
                <img src="imgs/cv.png" alt="CV 1">
                 <a href="cv.php" ><button class="use-template-button">Dùng mẫu này</button></a>
            </div>
             <div class="cv-template" data-category="simple professional" >
                <img src="imgs/cv1.png" alt="CV 1">
           <a href="cv.php" ><button class="use-template-button">Dùng mẫu này</button></a>
            </div>
            
           
        </div>
        <div id="cv-detail-modal" class="modal">
            <div class="modal-content">
                <span class="close-button" onclick="closeCVDetail()">&times;</span>
                <img id="cv-detail-image" src="" alt="CV Detail">
            </div>
        </div>
    </main>
    <script >
       
    </script>
</body>
</html>
