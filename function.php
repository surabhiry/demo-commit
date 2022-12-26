<?php 
include("auth_session.php");
	// include "dashboard.php";
	// include "login.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 	<style type="text/css">
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color: black;
 		}
 	</style>
 </head>
 <body >
 	<div class="container">
 		<div class="wrapper">
 			<h2 style="text-align: center;">My Profile</h2>
 			<div style="text-align: center;"> <b>Welcome, </b>
	 			<h4>
	 				<?php echo $_SESSION['username']; ?>
	 			</h4>
 			</div>
 			
 		</div>
 	</div>
 </body>
 </html>