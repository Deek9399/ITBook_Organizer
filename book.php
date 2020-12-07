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
  <title>Book</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
</head>
<body>
  	<?php include_once("template_pageTop.php"); ?>
	<div id="pageMiddle">
		<div id="pmleft"></div>
        <div id="pmcenter">
        	<br>
          
            	<?php
$username=$_SESSION['username'];
                include_once('connect.php');
	$name=$_GET['link'];
$news = mysqli_query($conn,"SELECT * FROM Book WHERE Bname='$name' AND  username='$username'");
$row = mysqli_fetch_assoc($news);
$img=$row['ImageL'];
$author=$row['Author'];
$read=$row['Readd'];
$review=$row['Review'];
$date=$row['DateAdded'];
echo "<br><h1>$name</h1><br><br><h2>$author</h2><br><br>";
echo "<br><img src='bookpics/$img'><br>";
echo "Added on $date";
if ($read!=1)
echo "<br><br>You have not read this book";
else
echo "<br><br>You have already read this book";
echo "<br><br>Review:<br><br>$review";

?>		 
		    	<br>
                
</body>
</html>