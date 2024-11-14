<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $father_name = isset($_POST['father_name']) ? htmlspecialchars($_POST['father_name']) : '';
    $department = isset($_POST['department']) ? htmlspecialchars($_POST['department']) : '';
    $return_time = isset($_POST['return_time']) ? htmlspecialchars($_POST['return_time']) : '';
    $book_title = isset($_POST['book_title']) ? htmlspecialchars($_POST['book_title']) : '';

    // Output the form data (optional, you could process or save it instead)
    echo "<h2>Your Borrowed Book Information:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Father's Name: " . $father_name . "<br>";
    echo "Department: " . $department . "<br>";
    echo "Return Time: " . $return_time . "<br>";
    echo "Book Title: " . $book_title . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Book Borrowing Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        form {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="datetime-local"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Library Book Borrowing Form</h1>

    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="father_name">Father's Name:</label><br>
        <input type="text" id="father_name" name="father_name" required><br><br>
        
        <label for="department">Department:</label><br>
        <input type="text" id="department" name="department" required><br><br>
        
        <label for="return_time">Return Time:</label><br>
        <input type="datetime-local" id="return_time" name="return_time" required><br><br>
        
        <label for="book_title">Book Title:</label><br>
        <input type="text" id="book_title" name="book_title" required><br><br>
        
        <input type="submit" value="Borrow Book">
    </form>

</body>
</html>


