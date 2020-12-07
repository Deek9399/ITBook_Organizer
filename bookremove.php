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
  <title>Book remove</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
</head>
<body>
  	<?php include_once("template_pageTop.php"); ?>
	<div id="pageMiddle">
		<div id="pmleft"></div>
        <div id="pmcenter">
        	<br>
        	<div style="font-size:50px;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif"></div>
            	<?php
$username=$_SESSION['username'];
                include_once('connect.php');
	$name=$_GET['link'];
$news = mysqli_query($conn,"DELETE FROM Book WHERE Bname='$name' AND  username='$username'");
if($news == true) {

echo "Book removed";
}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>		 
		    	<br>
                
</body>
</html>