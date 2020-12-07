<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!--<link rel="stylesheet" href="style/style.css">-->
 <style>
   body {
    margin: 0px;
    font-family: Calibri;
    font-size: 14px;
    height: 100%;
    background-image: url(https://www.theindianwire.com/wp-content/uploads/2018/04/books.jpg);
}
   div {
    width: 600px;
    margin: 60px auto;
    padding: 50px 0px;
    height: 500px;
    border-radius: 50px;
    color: rgba();
    background-color: rgb(74,22,5);
}
   form {
    padding-left: 150px;
}
   
   input {
    border-radius: 20px 20px;
    width: 250px;
    height: 25px;
    padding-left: 10px;
}
   
   h1 {
    text-align: center;
    font-size: 60px;
    color: white;
}
   
 h1:hover{
    text-shadow:0px 0px 20px black;
}
   #lusername:hover,#lpassword:hover{
    text-shadow:0px 0px 10px black;
}
   
   input[type="submit"] {
    height: 35px;
    color: white;
    background: rebeccapurple;
    border: solid #3f3fdf;
    font-size: 25px;
    margin-top: 40px;
    text-transform: uppercase;
}
   
   h5 {
    font-size: 25px;
    text-decoration: none;
    margin-left: 20px;
    text-align: center;
    color: white;
}
   
   a {
    text-decoration: none;
    color: white;
    font-size: 25px;
    text-transform: uppercase;
    margin-left: 250px;
}
   
   a:hover {
    text-shadow: 0px 0px 10px cyan;
    color: blue;
}
   
   @media screen and (max-width: 800px) {
    form {
    padding-left: 80px;
}
     input {
    
    width: 80%;
   
}
    }
  </style>
</head>
<body>
  	<?php /*include_once("template_pageTop.php");*/
           
error_reporting(0);
include_once('connect.php');
	if($_SERVER["REQUEST_METHOD"]="POST")
	{
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		$sql="SELECT username,password FROM users WHERE username='$username' and password='$password'";
		$result = mysqli_query($conn,$sql);
      	$count = mysqli_num_rows($result);
		if($count == 1) 
		{
				session_start();
                $_SESSION['username'] = $username;      
                header("location: index.php");
		}
	}
	
	 mysqli_close($conn);
?>		 
<div>
  	<h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input id="lusername" type"text" name="username" placeholder="Username"><br><br>
    <input id="lpassword" type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" name="submit" value"Submit">
    </form>
                <?php echo $error; ?>
  <br><h5>Not a member?</h5>
  <a href="register.php">Register</a>
<br><br><a href="ref.html">Refer</a>
                
                
</body>
</html>