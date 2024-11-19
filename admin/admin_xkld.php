<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Tin Xuất Khẩu Lao Động</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

h1 {
  text-align: center;
}

.form-group {
 margin-bottom: 20px;
  width: 100%;
  max-width: 800px; 
  text-align: center;

}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="file"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

textarea {
  resize: vertical;
  min-height: 100px;
}

button {
  display: block;
  width: 100px;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

    </style>
  
</head>
<body>
  <div class="container">
    <h1>Đăng Tin Xuất Khẩu Lao Động</h1>
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Tiêu đề bài viết <span style="color:red;">*</span> </label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="introduction">Giới thiệu <span style="color:red;">*</span> </label>
        <textarea id="introduction" name="introduction" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="image">Hình ảnh minh hoạ <span style="color:red;">*</span> </label>
        <input type="file" id="image" name="image" required accept="image/*" style="margin-bottom: 40px;">
        <input type="text" id="image-name" name="image-name" placeholder="Tên hình ảnh">
      </div>
      <button type="submit">Đăng Tin</button>
    </form>
  </div>
</body>
</html>
