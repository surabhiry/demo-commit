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
                <td><strong>User Id</strong></td>
                <td><strong>Username</strong></td>
                <td><strong>Email</strong></td>
                <td><strong>Password</strong></td>
            </tr>
        </div>
<?php

include "totaldb.php"; // Using database connection file here

$records = mysqli_query($db,"select * from register"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['email']; ?></td>
	<td><?php echo $data['password']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>



        </body>
</html>