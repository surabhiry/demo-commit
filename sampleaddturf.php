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
        <link rel="stylesheet" href="thane_turf_css.css">
        <title>Khelo</title>
    </head>
    
    <body>

        
<!--        Navigation Bar-->
        <nav>
            <ul>
                <li><a href="http://localhost/Brackets/login.php">Login</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="home_page.html"> Home </a></li>
                <li class="logo"><img class="logo1" src="logo_3.png"></li>
            </ul>  
        </nav>
        
<br>
        <div class="heading">
            <h1 style="font-size: 50px;">THANE</h1>
        </div>
    </body>
<!--    CONTAINER1-->
    <div class="turfs">
        <div class="card">
            <img alt="" src="turf%201.jpg" >
            <div class="details">
                <h2 style="font-size: 16px;">Hatrics Turf</h2>
                <p class="price">INR 200.00</p>
                <p>Thane</p>
                <a href="Thane_turf1.html"><p><button>Book Now</button></p></a>
            </div> 
        </div>
        
        <div class="card">
            <img alt="" src="Golden%20goal%202.JPG" class="turf_img" >
            <div class="details">
                <h2 style="font-size: 16px;" class="turf_name">Golden Turf</h2>
                <p class="turf_price">INR 200.00</p>
                <p>Thane</p>
                <a href="Thane_turf2.html"><p><button>Book Now</button></p></a>
            </div> 
        </div>
        
        <div class="card">
            <img alt="" src="urban%202.JPG" >
            <div class="details">
                <h2 style="font-size: 16px;">Urban Turf</h2>
                <p class="price">INR 200.00</p>
                <p>Thane</p>
                <a href="Thane_turf3.html"><p><button>Book Now</button></p></a>
            </div> 
        </div>
        
        <div class="card">
            <img alt="" src="Truftmc%202.JPG" >
            <div class="details">
                <h2 style="font-size: 16px;">Turf TMC</h2>
                <p class="price">INR 200.00</p>
                <p>Thane</p>
                <a href="Thane_turf4.html"><p><button>Book Now</button></p></a>
            </div> 
        </div>
        
        <div class="card">
            <img alt="" src="7%20colors%202.JPG" >
            <div class="details">
                <h2 style="font-size: 16px;">7 Colors</h2>
                <p class="price">INR 200.00</p>
                <p>Thane</p>
                <a href="Thane_turf5.html"><p><button>Book Now</button></p></a>
            </div> 
        </div>
    </div>
    
    <div class="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1AyKEy-yEeXkLyBmhQs4RuMo1gRmGWmgs"></iframe>
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
        
</html>