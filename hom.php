<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $department = $_POST['department'];
    $return_time = $_POST['return_time'];
    $book_title = $_POST['book_title'];

    // Here you could save the data to a database or process it as needed
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Father's Name: " . htmlspecialchars($father_name) . "<br>";
    echo "Department: " . htmlspecialchars($department) . "<br>";
    echo "Return Time: " . htmlspecialchars($return_time) . "<br>";
    echo "Book Title: " . htmlspecialchars($book_title) . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Book Borrowing Form</title>
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
