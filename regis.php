<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href="icon_2.png"  >
    <link rel="stylesheet" type="text/css" href="loginphp.css">
    <title>Khelo</title>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `register` (username, email, password)
                     VALUES ('$username', '$email','$password')";
        $result   = mysqli_query($con, $query);
        
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<nav>
            <ul>
                <li><a href="Login.php" class="navi">Login</a></li>
                <li><a href="about_us.html" class="navi">About Us</a></li>
                <li><a href="home_page.html" class="navi"> Home </a></li>
                <li class="logo"><img class="logo1" src="logo_3.png"></li>
            </ul>  
        </nav><br>
        <div class= form_container> 
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required /><br><br>
        <input type="email" class="login-input" name="email" placeholder="Email Adress"><br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"><br><br>
        <button type="submit" name="submit" value="Register" class="login-button">Register</button>
        <p class="link"><a href="http://localhost/Brackets/login.php">Click to Login</a></p>
    </form>
    </div>
<?php
    }
?>
</body>
</html>