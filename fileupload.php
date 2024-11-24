<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .upload-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .file-input {
            margin: 10px 0;
        }

        input[type="file"] {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            background: #f9f9f9;
        }

        button {
            margin-top: 15px;
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #4cae4c;
        }

        .success {
            margin-top: 15px;
            color: green;
        }

        .error {
            margin-top: 15px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="upload-container">
        <h1>Upload a File</h1>
        <!-- File Upload Form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="file-input">
                <input type="file" name="uploadedFile" required>
            </div>
            <button type="submit" name="upload">Upload</button>
        </form>

        <!-- PHP Script for Handling File Upload -->
        <?php
        if (isset($_POST['upload'])) {
            // Directory to save the uploaded file
            $uploadDir = "uploads/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir); // Create directory if it doesn't exist
            }

            $fileName = basename($_FILES["uploadedFile"]["name"]);
            $targetFilePath = $uploadDir . $fileName;

            // Check if file was uploaded successfully
            if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFilePath)) {
                echo "<p class='success'>File uploaded successfully: " . htmlspecialchars($fileName) . "</p>";
            } else {
                echo "<p class='error'>There was an error uploading the file. Please try again.</p>";
            }
        }
        ?>
    </div>
</body>
</html>