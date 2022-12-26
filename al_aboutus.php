<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="icon_2.png"  >
        <link rel="stylesheet" type="text/css" href="about_us.css">
        <title>Khelo</title>
    </head>
    
    <body>

        
<!--        Navigation Bar-->
        <nav>
            <ul>
            <li><a href="http://localhost/Brackets/user_info.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
                <li><a href="http://localhost/Brackets/al_aboutus.php">About Us</a></li>
                <li><a href="http://localhost/Brackets/dashboard.php"> Home </a></li>
                <li class="logo"><img class="logo1" src="logo_3.png"></li>
            </ul>  
        </nav>
        
        <br>
        <div class="heading">
            <h1>About Us</h1>
        </div>
        
        <div class="details">
            <h2>Aim</h2>
            <p><b>KHELO</b> is online platfrom for football players to make turf booking procedure easy and less time consumimg. It not only helps players in turf booking but also helps the turf owner to attract more players according to their rating,facilities and services.</p>
            
            <h2>Members</h2>
            <div class="members">
                <div class="member">
                    <img src="programmerm.png">
                    <h3>Anuj Myageri</h3>
                </div>
                <div class="member">
                    <img src="programmerw.png">
                    <h3>Surabhi Yadav</h3>
                </div>
                <div class="member">
                    <img src="programmerw.png">
                    <h3>Aayushi Kale</h3>
                </div>
                <div class="member">
                    <img src="programmerm.png">
                    <h3>Sachet Naik</h3>
                </div>
            
            </div>
        </div>
        
        <footer>
            <div class="social_links">
                <a class="soacial" href=""><img class="social_img" alt="" src="facebook.png"> </a>
                <a class="soacial" href=""><img class="social_img" alt="" src="twitter%20(1).png"> </a>
                <a class="soacial" href=""><img class="social_img" alt="" src="gmail.png"> </a>
            </div>
            <div class="contact_details">
                <a class="contact" href="contact_us.html"><b>Contact Us</b></a>
                <a class="contact" href="about_us.html"><b>About Us</b></a>
<!--                <a class="soacial" href=""></a>-->
            </div>
    </footer>
</body>

</html>