<?php 
include("auth_session_admin.php");
	// include "dashboard.php";
	// include "login.php";
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="admin_home.css" />
</head>
<body>    
    <!--        Navigation Bar-->
    <div class="nav">
            <ul>
            <li><a href="http://localhost/Brackets/admin_info.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
                <!-- <li><a href="http://localhost/Brackets/al_aboutus.php">About Us</a></li> -->
                <li><a href="http://localhost/Brackets/admin_home.php"> Home </a></li>
                <li class="logo"><img class="logo1" src="logo_3.png"></li>
            </ul>  
        </div><br>
        <div class="container2">
        <!-- <button   class="add_turf"><a href="http://localhost/Brackets/add_turf.php">Add Turf</a></button> -->
        <!-- <button    class="booked"><a href="">Booking Details</a></button><br><br> -->
        <!-- <button    class="total"><a href="http://localhost/Brackets/totalturf.php">Total Turfs</a></button> -->
        <button    class="totalusers"><a href="http://localhost/Brackets/total_users.php">Total Users</a></button>
        </div>
</body>
</html>
        