<?php

$db = mysqli_connect("localhost","root","","turf_connect");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>