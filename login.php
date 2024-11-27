<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'library';
$conn = new mysqli($host,$user,$pass,$db);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            display:flex;
            align-items:center;
            justify-content:center;
            height: 100vh;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: right;
            justify-content: center;
            padding: 10px;
        }
    </style>
    <title>Library : Login</title>
</head>
<body>
    <form action="" method="post" class='bg-info rounded'>
        <h1 m-2 text-white><i class="fa fa-book"></i> Wellcome to Our Library</h1>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required="required">
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" placeholder="Enter your password"required="required" >
        <button type="submit" class="btn btn-success" name="login">Login</button>
        <p class='text-center '>Haven't account yet ? <a href="register.php" class="text-white">Create account</a></p>
    <?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
        $result = $conn->query($sql);
        if($result->num_rows == 0){
            echo "<h4 class='alert alert-danger'><i class='fa fa-exclamation-circle'></i>You have entered incorrect email or password!</h4>";
        }else{
            session_start();
            $_SESSION['email'] = $email;
            header("location:index.php");
        }
    }
    ?>
    </form>
</body>
</html>
