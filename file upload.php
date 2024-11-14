<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate the inputs
    if (empty($_FILES['file']['name']) || empty($_POST['content'])) {
        $message = 'File and content are required.';
    } else {
        // Handle file upload
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);

        // Create the uploads directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Move the uploaded file to the uploads directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            $message .= "File is valid and was successfully uploaded.<br>";
        } else {
            $message .= "Possible file upload attack!<br>";
        }

        // Read and write to a text file
        $content = strip_tags($_POST['content']);
        $fileToWrite = $uploadDir . 'content.txt';

        // Write content to the file
        file_put_contents($fileToWrite, $content);
        $message .= "Content has been written to $fileToWrite.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="file"], textarea {
            width: 100%;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            margin-top: 20px;
            color: red;
        }
    </style>
</head>
<body>
    <h1>File Upload Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Choose file:</label>
        <input type="file" name="file" id="file" required>
        <br>
        <label for="content">Write something:</label>
        <textarea name="content" id="content" required></textarea>
        <br>
        <input type="submit" value="Upload">
    </form>

    <div class="message">
        <?php if ($message) echo $message; ?>
    </div>
</body>
</html>
