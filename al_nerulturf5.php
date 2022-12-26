<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="icon_2.png"  >
        <link rel="stylesheet" href="nerul_turfs.css">
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
        </nav><br>
            
        <div class="heading">
<!--            <img class="turf_des" src="turf_des.jpg">-->
            <video id="background-video" autoplay loop muted poster="bg.jpg"><source src="bg.mp4" type="video/mp4">
            </video>
            <h1 style="font-size: 50px;">DON BOSCO</h1>
        </div>
        
        <div class="turf">
            <img class="turf_img" src="Don%20bosco%20turf.JPG">
            <div class="turf_details">
                <h2 style="font-size: 30px;">Don Bosco</h2>
                <p>2287+RXC, Seawoods West, Sector 42A, Seawoods, Navi Mumbai, Maharashtra 400706</p>
                <h3>Contact Details: NA</h3>
                <!-- <input type="date" id="start" name="trip-start"
                       value="2021-01-01"
                       min="2021-01-01" max="2030-01-01">

                <select class="select" >
                    <option value="" disabled selected>Time Slot</option>
                    <option value="1">10AM-11AM</option>
                    <option value="2">11AM-12AM</option>
                </select><br>
                <select class="select" >
                    <option value="" disabled selected>No. Of Players</option>
                    <option value="1">6v6</option>
                    <option value="2">7v7</option>
                </select><br> -->
                <button><a href="https://kheloforturf-2.youcanbook.me/" target="popup" onclick="window.open('https://kheloforturf-2.youcanbook.me/','popup','resizable=0,width=500,height=500'); return false;">BOOK NOW</a></button>
            </div>
        </div>
        
        
        
        <div class="customer_review">
            <h3>Customer Reviews:</h3>
            <h3>Rating</h3>
        </div>
<br>
        
        <footer>
            <div class="social_links">
                <a class="soacial" href=""><img class="social_img" alt="" src="facebook.png"> </a>
                <a class="soacial" href=""><img class="social_img" alt="" src="twitter%20(1).png"> </a>
                <a class="soacial" href=""><img class="social_img" alt="" src="gmail.png"> </a>
            </div>
            <div class="contact_details">
                <a class="contact" href="contact_us.html"><b>Contact Us</b></a>
                <a class="contact" href="about_us.html"><b>About Us</b></a>
                <a class="soacial" href=""></a>
            </div>
</footer>
    </body>
</html>