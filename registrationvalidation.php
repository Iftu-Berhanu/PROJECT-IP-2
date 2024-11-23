<?php $host = 'localhost';
$user = 'root';
$pass = '';
$db = 'library';
$conn = mysqli_connect($host,$user,$pass,$db); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="registervalidation.js"></script>
    <style>
        body{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: right;
            justify-content: center;
            padding: 10px;
        }
    </style>
    <title>Library : Signup</title>
</head>
<body>
    <form action="" onsubmit="return validate()" method="post" class='border border-secondary rounded' >
    <h3 m-2 text-white><i class="fa fa-book"></i> Regisrer to Our Library</h3>
        
        
        <label for="name">Full Name</label>
        <div class="d-flex">
        <input type="text" name="first" id="first" placeholder="First Name"   oninput="validateName()">
        <input type="text" name="last" id="last" placeholder="Last Name"   oninput="validateName()">
        </div>
        <div id="error_name" class="text-danger text-right font-weight-bold"></div>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email"  oninput="validateEmail()">
        <div id="error_email" class="text-danger text-right font-weight-bold"></div>

        <label for="phone">phone</label>
        <input type="tel" name="phone" id="phone" placeholder="Enter your Phonenumber"  oninput="validatePhone()">
        <div id="error_phone" class="text-danger text-right font-weight-bold"></div>

        <h4>Sex</h4>
        <div>
            <input type="radio" name="sex" id="female" value="F" checked="checked">
            <label for="female">Female</label>
        </div>
        <div>
            <input type="radio" name="sex" id="male" value="M">
            <label for="male">Male</label>    
        </div>
        <label for="birth">Date of birth</label>
        <input type="date" name="birth" id="birth"    oninput="validateBirth()">
        <div id="error_birth" class="text-danger text-right font-weight-bold"></div>

        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" placeholder="Enter your password"   oninput="validatePassword(),validateConfirm()">
        <div id="error_pass" class="text-danger text-right font-weight-bold"></div>
        
        <label for="confirm">Confirm password</label>
        <input type="password" name="confirm" id="confirm" placeholder="confirm your password"   oninput="validateConfirm(),validatePassword()">
        <div id="error_confirm" class="text-danger text-right font-weight-bold"></div>

        <button type="submit" class="btn btn-success " name="signup" >Register</button>
        <p class='text-center '>Already have account ? <a href="login.php" class="text-primary">Login</a></p>
        <?php 
        if(isset($_POST['signup'])){
            $first = $_POST['first'];
            $last = $_POST['last'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $sex = $_POST['sex'];
            $birth = $_POST['birth'];
            $pass = $_POST['pass'];
            $confirm = $_POST['confirm'];
            
            $sql = "SELECT * FROM users WHERE email = '$email' OR phone = '$phone'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo "<h4 class='alert alert-danger'><i class='fa fa-exclamation-circle'></i>The email or phone is already token please insert another!</h4>";
            }else{
                $sql = "INSERT INTO users VALUES ('$email','$first','$last','$phone','$sex','$birth','$pass','user')";
                $result = $conn->query($sql);
                session_start();
                $_SESSION['email'] = $email;
                header("location:index.php");
            }
        }
        ?>
        
    </form>
</body>
</html>