<?php
$servername = 'localhost:3307';
$usrname = 'root';
$password = '';

// Create connection
$conn = mysqli_connect($servername, $usrname, $password);
if (!$conn) 
    die('Connection failed: ' . mysqli_connect_error());
         $db = mysqli_select_db($conn,'bookdb')or die(mysql_error());
?>