<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Remove Book</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
</head>
<body>
  	<?php include_once("template_pageTop.php"); ?>
	<div id="pageMiddle">
		<div id="pmleft"></div>
        <div id="pmcenter">
        	<br>
        	<div style="font-size:50px;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">Select Book to remove</div>
            	<?php
         include_once('connect.php');
$username=$_SESSION['username'];
     	
		  $books = mysqli_query($conn,"SELECT * FROM Book WHERE username='$username' ORDER BY dateadded DESC");
while ($row = mysqli_fetch_array($books)) {
  $name=$row['Bname']; 
    /*echo "<br><br>";*/
  echo "<a href='bookremove.php?link=$name'>$name</a><br>";
	
}		
           
?>		 
		    	<br>
                
</body>
</html>