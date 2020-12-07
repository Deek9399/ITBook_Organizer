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
  <title>Books</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!--<link rel="stylesheet" href="style/style.css">-->
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
 


  </style>
</head>
<body>
  	<?php include_once("template_pageTop.php"); ?>
	<div id="pageMiddle">
		<div id="pmleft"></div>
        <div id="pmcenter">
        	<br>
        	<div style="font-size:50px;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif"><h1 style="text-transform:capitalize;font-size:60px;">BOOKS</h1></div>
            	<?php
         include_once('connect.php');
$username=$_SESSION['username'];
     	
		  $books = mysqli_query($conn,"SELECT * FROM Book WHERE username='$username' ORDER BY dateadded DESC");
while ($row = mysqli_fetch_array($books)) {
  $name=$row['Bname']; 
  $author=$row['Author'];
  $image=$row['ImageS'];
 
  $date=$row['DateAdded'];

  /*echo "<br><br>";*/
  echo "<br><br><a href='book.php?link=$name'>$name</a><br>";
	echo "<br><img src='bookpics/$image'><br>$name";
	echo "<br>Author: $author";
	echo "<br>Date added: $date";
}		
           
?>		 
		    	<br>
                
</body>
</html>