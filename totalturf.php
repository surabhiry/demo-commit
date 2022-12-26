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
    <link rel="stylesheet" href="totalusers.css" />
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
        <div class="table-wrapper">
        <table class="fl-table">
            <tr>
                <td><strong>Turf Id</strong></td>
                <td><strong>Turf Name</strong></td>
                <!-- <td><strong>Turf City</strong></td> -->
                <td><strong>Turf Address</strong></td>
                <td><strong>Turf Price(In Rupee)</strong></td>
            </tr>
        </div>
<?php

include "totaldb.php"; // Using database connection file here

$records = mysqli_query($db,"select * from add_turf"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['turf_name']; ?></td>
    <!-- <td><?php echo $data['turf_city']; ?></td> -->
    <td><?php echo $data['turf_add']; ?></td>
	<td><?php echo $data['turf_price']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>



        </body>
</html>