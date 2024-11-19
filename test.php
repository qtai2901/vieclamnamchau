<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Tải Lên Hồ Sơ</title>
    <style>
        .download-button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .download-button i {
            margin-right: 8px;
        }

        .download-button:hover {
            background-color: #45a049;
        }

        .hidden-input {
            display: none;
        }
    </style>
</head>
<body>
    <form id="upload-form" action="db/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" id="file-input" class="hidden-input" name="fileToUpload">
        <button type="button" class="download-button" onclick="document.getElementById('file-input').click();">
            <i class="fa fa-download" aria-hidden="true"></i>Tải Lên Hồ Sơ Có Sẳn
        </button>
    </form>

    <script>
        document.getElementById('file-input').addEventListener('change', function() {
            document.getElementById('upload-form').submit();
        });
    </script>
</body>
</html>
