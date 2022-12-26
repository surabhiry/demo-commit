
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="google-signin-client_id" content="919257606185-ciipgerningfja5dnrcu8skek3ke3als.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="icon" href="icon_2.png"  >
    <link rel="stylesheet" type="text/css" href="loginphp.css">
    <title>Khelo</title>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `register` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

<!--        Navigation Bar-->
<nav>
            <ul>
                <li><a href="login.php" class="navi">Login</a></li>
                <li><a href="about_us.html" class="navi">About Us</a></li>
                <li><a href="home_page.html" class="navi"> Home </a></li>
                <li class="logo"><img class="logo1" src="logo_3.png"></li>
            </ul>  
        </nav><br>

    <div class= form_container> 
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/><br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"/><br><br>
        <button type="submit" value="Login" name="submit" class="login-button">Login</button>
        <p class="link"><a href="http://localhost/Brackets/admin_login.php">Admin Login</a></p>
        <p class="link"><a href="http://localhost/Brackets/regis.php">New Registration</a></p>
        
  </form>
  </div> 
<?php
    }
?>
</body>
</html>