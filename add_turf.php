<?php 
include("auth_session_admin.php");
include("db.php")
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="admin_home.css" />
</head>
<?php
    require('totaldb.php');
    
    if (isset($_REQUEST['turf_name'])) {
        
        $turf_name = stripslashes($_REQUEST['turf_name']);
        
        $turf_name = mysqli_real_escape_string($con, $turf_name);
        $turf_add    = stripslashes($_REQUEST['turf_add']);
        $turf_add    = mysqli_real_escape_string($con, $turf_add);
        $turf_price = stripslashes($_REQUEST['turf_price']);
        $turf_price = mysqli_real_escape_string($con, $turf_price);
        // $image=$_FILES['myfile'];
        
        $query    = "INSERT into `add_turf` (turf_name, turf_add, turf_price)
                     VALUES ('$turf_name', '$turf_add','$turf_price')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Turf Added Succesfully.</h3><br/>
                  <p class='link'>Click here to <a href='admin_home.php'>home</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='add_turf.php'>Add Turf</a> again.</p>
                  </div>";
        }
    } else {
?>


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
        <div class="container">
            <form action="" method="post">
                <h2>Add Turf</h2>
                <label>Turf Name:</label><br>
                <input type="text" class="turf_n" name="turf_name" placeholder="Turf name" autofocus="true"/><br><br>
                <label>Turf City:</label><br>
                <!-- <input type="text" class="turf_c" name="turf_city" placeholder="Turf City" /><br><br>
                <label>Turf Adress:</label><br> -->
                <input type="text" class="turf_ad" name="turf_add" placeholder="Turf Address" /><br><br>
                <label>Turf Price:</label><br>
                <input type="text" class="turf_p" name="turf_price" placeholder="Turf Price" /><br><br>
                <label>Turf Image:</label><br>
                <input type="file" id="img" name="turf_img" accept="image/*"><br><br>
                <button  value="Submit" name="submit" class="addturf">Add Turf</button>
                <form>
        </div>
        <?php
    }
?>
</body>
</html>