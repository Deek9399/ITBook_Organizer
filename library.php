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
  <title>Shelf</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!--<link rel="stylesheet" href="style/style.css">-->
</head>
  <style>
  body{
  background-image: url(https://www.theindianwire.com/wp-content/uploads/2018/04/books.jpg);
    position: absolute;
  }
  div#pageMiddle {
    width: 1000px;
    margin: 20px 250px;
    position: relative;
    text-align: center;
    border-radius: 20px;
    top: 100px;
    padding-top: 20px;
    padding-bottom: 20px;
    background-color: rgb(74,22,5);
    color:white;
    
}
h1 {
    font-size: 60px;
    text-shadow: 0px 0px 10px black;
  	text-transform:capitalize;
}  
 /* h1:hover {
    font-size: 70px;
    transition-duration: 0.2s;
}*/


  </style>
<body>
  	<?php include_once("template_pageTop.php"); ?>
	<div id="pageMiddle">
		<div id="pmleft"></div>
        <div id="pmcenter">
        	<br>
        	<div><h1>Bookshelf</h1></div>
            	<?php
echo "<br><a href=addbook.php>Add book</a><br>";
echo "<a href=removebook.php>Remove book</a><br>";
echo "<a href=modbook.php>Update book</a><br>";
?>		 
		    	<br>
                
</body>
</html>