<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>AddUser</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
</head>
<body>
  	<?php include_once("template_pageTop.php"); ?>
	<div id="pageMiddle">
		<div id="pmleft"></div>
        <div id="pmcenter">
        	<br>
Add news
 <?php 
 include_once('connect.php');
 
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$email=$_POST['emaill'];
		 $query= mysqli_query($conn,"INSERT INTO users(username,password,name,email) VALUES ('$username','$password','$fname','$email')");
		 if($query == true) {

echo "Account Created Successfully";
}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		 
?>
<br>       
            </div>
            <a href = "login.php">Sign In</a>
            
	</div>
	<?php include_once("template_pageBottom.php"); ?>
	
</body>
</html>