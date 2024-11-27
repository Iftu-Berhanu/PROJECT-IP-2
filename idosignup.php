<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Sign Up</title>
    <link rel="stylesheet" href="STYLE.CSS">
    <script src="validation.js"></script>
</head>
<body>
    <form id="signupForm" action="signup.php" method="post" onsubmit="return validateSignupForm()">
        <h2>Sign Up</h2>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        
        <label for="second_name">Second Name:</label>
        <input type="text" id="second_name" name="second_name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required>
        
        <label for="year_of_study">Year of Study:</label>
        <input type="checkbox" id="year1" name="year_of_study" value="1"> 1
        <input type="checkbox" id="year2" name="year_of_study" value="2"> 2
        <input type="checkbox" id="year3" name="year_of_study" value="3"> 3

        <label for="sex">Sex:</label>
        <input type="checkbox" id="male" name="sex" value="male"> Male
        <input type="checkbox" id="female" name="sex" value="female"> Female
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
