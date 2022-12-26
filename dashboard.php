<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="home_page_css.css" />
</head>
<body>    
    <!--        Navigation Bar-->
    <div class="nav">
            <ul>
            <li><a href="http://localhost/Brackets/user_info.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="http://localhost/Brackets/al_aboutus.php">About Us</a></li>
                <li><a href="http://localhost/Brackets/dashboard.php"> Home </a></li>
                <li class="logo"><img class="logo1" src="logo_3.png"></li>
            </ul>  
        </div><br>
        
<!--        Container 1-->
        <div class="cont1">
            <video id="background-video" autoplay loop muted poster="bg1.jpg"><source src="bg1.mp4" type="video/mp4">
            </video>
            <h1>KHELO</h1>
            <h2 style="color:white">For Your Nearest Turf</h2>
        </div>
        
<!--        Container 2-->
        <div class="cont2">
            <h2><b>Select Your City</b></h2>
            

            
<!--            SELECT CITY-->
            <div class="city">
                <div class="city_cards">
                    <div class="card2">
                        <a href="http://localhost/Brackets/al_thane_turf.php">
                            <img alt="" src="THANE.png" >
                            <div class="details">
                                <h2 style="font-size: 16px;">THANE</h2>
                            </div>
                        </a>
                    </div>
                    
                    <div class="card2">
                        <a href="http://localhost/Brackets/al_nerul_turf.php">
                            <img alt="" src="NERUL.png" >
                            <div class="details">
                                <h2 style="font-size: 16px;">NERUL</h2>
                            </div>
                        </a>
                    </div>            
        </div>
                
            </div>
        </div>
        
<!--CONTAINER 3-->
        <div id="slider">  
<div class="slides">  
  <img src="bannera.jpg" width="100%" />
 </div>
  
  <div class="slides">  
  <img src="bannerb.jpg" width="100%" />
</div>
  
  <div class="slides">  
  <img src="bannerc.jpg" width="100%" />
</div> 
  
   <div class="slides">  
  <img src="bannerd.jpg" width="100%" />
</div> 
  
<div class="slides">  
  <img src="bannerb.jpg" width="100%" />
</div>  
  
  <div id="dot"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
 </div>
<SCRIPT>
        var index = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide(){

  if(index<0){
    index = slides.length-1;
  }
  
  if(index>slides.length-1){
    index = 0;
  }
  
  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }
  
  slides[index].style.display= "block";
  dot[index].classList.add("active");
  
  index++;
  
  setTimeout(changeSlide,2000);
  
}

changeSlide();
        </SCRIPT>
        
                
<!--        CONTAINER 4-->
        <div class="cont4">
            <div class="turf">
                <h2 class="heading">Top Turfs</h2>
            </div>
        
                <div class="top_turf">
                <div>
                    <div class="card">
                        <a href="http://localhost/Brackets/al_thaneturf1.php">
                            <img alt="" src="turf%201.jpg" >
                            <div class="details">
                                <h2 style="font-size: 16px;">Hatrics Turf</h2>
                                <p class="price">INR 1,500.00</p>
                                <p>Thane</p>
                                <p><button>Book Now</button></p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="card">
                        <a href="http://localhost/Brackets/al_nerulturf4.php">
                            <img alt="" src="NerulGymkhana2.jpg" >
                            <div class="details">
                                <h2 style="font-size: 16px;">Gymkhana</h2>
                                <p class="price">INR 1,500.00</p>
                                <p>Nerul</p>
                                <p><button>Book Now</button></p>
                            </div>
                        </a>
                    </div>
                
                    <div class="card">
                        <a href="http://localhost/Brackets/al_thaneturf4.php">
                            <img alt="" src="tmc.jpg" >
                            <div class="details">
                                <h2 style="font-size: 16px;">Turf TMC</h2>
                                <p class="price">INR 1,500</p>
                                <p>Thane</p>
                                <p><button>Book Now</button></p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="card">
                        <a href="http://localhost/Brackets/al_nerulturf1.php">
                            <img alt="" src="terna%20turf%202.JPG" >
                            <div class="details">
                                <h2 style="font-size: 16px;">Terna Turf</h2>
                                <p class="price">INR 2,000</p>
                                <p>Nerul</p>
                                <p><button>Book Now</button></p>
                            </div>
                        </a>
                    </div>

            </div>
        
        </div>
        </div>
        
        
        
        
        
        
<!--        FOOTER-->
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