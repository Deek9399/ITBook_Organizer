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
  <title>Book add</title>
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
 
$name=$_POST['name'];
$author=$_POST['author'];
$category=$_POST['category'];
$review=$_POST['review'];
$readd=$_POST['readd'];
	$picname=$_FILES['pic']['name'];
	$pictemp=$_FILES['pic']['tmp_name'];
    move_uploaded_file($pictemp,"bookpics/".$picname);
         
	$pic2name=$_FILES['pic2']['name'];
	$pic2temp=$_FILES['pic2']['tmp_name'];
    move_uploaded_file($pic2temp,"bookpics/".$pic2name);
         
if($picname=="")
$picname="nil";
if($pic2name=="")
$pic2name="nil";

		 $query= mysqli_query($conn,"INSERT INTO Book(author,category,username,bname,review,images,imagel,readd) VALUES ('$author','$category','$username','$name','$review','$picname','$pic2name','$readd')");
		 if($query == true) {

echo "Book added Successfully";
}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		 
?>
<br>       
            </div>
            <a href = "addbook.php">Add another book</a>
         
            
	</div>
	
	
</body>
</html>