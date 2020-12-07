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
  <title>Add book</title>
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
        	<div style="font-size:50px;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif">Add Book</div>
            
      <form action="bookadd.php" method="post" enctype="multipart/form-data">
		Book name:<input type="text" name="name"><br><br>
        Author:<input type="text" name="author"><br><br>
        Category:<input type="text" name="category"><br><br>
<input type="radio" name="readd" value="1" checked> Read<br>
  <input type="radio" name="readd" value="0"> Not Read<br>
        Review:<br><textarea name="review" style="width:250px;height:150px;"></textarea><br><br>
	
        Upload Small Image:<input type="file" name="pic"><br><br>
 		Upload Large Image:<input type="file" name="pic2"><br><br>
 		
        <input type="submit" name="submit" value="Submit"><br><br>
 </form>              
            </div>
            
	</div>
	      	 
		    	<br>
                
</body>
</html>