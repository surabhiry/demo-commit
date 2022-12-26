<?php 
include("auth_session_admin.php");
	// include "dashboard.php";
	// include "login.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="icon_2.png"  >
        <link rel="stylesheet" href="user_info.css">
        <title>Khelo</title>
    </head>
    
    <body>

        
<!--        Navigation Bar-->
        <nav>
            <ul>
            <li><a href="logout.php">Logout</a></li>
                <!-- <li><a href="http://localhost/Brackets/al_aboutus.php">About Us</a></li> -->
                <li><a href="http://localhost/Brackets/admin_home.php"> Home </a></li>
                <li class="logo"><img class="logo1" src="logo_3.png"></li>
            </ul>  
        </nav><br>

        <div class="container">
 			<h1 style="text-align: center;">Admin Profile</h1><br>
 			<div style="text-align: center;"> 
             <img class="user_img" src="user.png">
             <h3><b>Welcome, <?php echo $_SESSION['adminname']; ?></b><h3><br>
 			</div>
        </div>

        </div>
        </div>
        </html>