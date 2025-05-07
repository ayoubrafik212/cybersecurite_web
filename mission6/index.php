<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Vulnerability</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 28px;
        }

        input[type="file"] {
            background-color: #fff;
            color: #000;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #e67e22;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d35400;
        }

        .icon {
            font-size: 50px;
            margin-bottom: 20px;
        }
    </style>
    <!-- Icon library (Font Awesome) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="icon">
            <i class="fas fa-upload"></i>
        </div>
        <h1>PHP Drive</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile" required>
            <br>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>

</html>
