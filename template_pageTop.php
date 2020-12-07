<!doctype html>
<html>
<head>
    <meta charset='UTF-8'>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCTCS</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'>
    <!--<link rel='stylesheet' href='style/style.css'>-->
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Tangerine'>
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3mobile.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <!--<script type="text/javascript" src="js/cssrefresh.js"></script>-->
    <style>
        .w3-tangerine {
        font-family: 'Tangerine', serif;
        }
      	#fl{
          float: right;
      }
      #menu{
        position:fixed;
        z-index:100;
      }
      
      @media screen and (max-width: 600px) {
  	/*#menu{
        display:none;
      }*/
}
     
    </style>
</head>

<div id=pageTop>
    <div id="pageT" class="w3-blue">
			
        <div id="menu" class="w3-card-4 w3-bar w3-black ">                
            <button class="w3-bar-item w3-button w3-xlarge w3-hover-theme w3-hide-large w3-mobile" onclick="openSidebar()" style="text-align:left;">&#9776;</button>
            <a href="index.php" class="w3-bar-item w3-button" >Home</a>
            <a href="books.php" class="w3-bar-item w3-button">Books</a>
            <a href="library.php" class="w3-bar-item w3-button">Shelf</a>
          	<a href="ref.html" class="w3-bar-item w3-button">Search</a>
          	<a id="fl" class="w3-bar-item w3-button" href = "logout.php">Sign Out</a>
            
        </div>
      	<nav class="w3-sidebar w3-bar-block w3-card w3-black" id="mySidebar" style="text-align:left;">
			<div class="w3-container w3-theme-d2 w3-xxlarge">
  			<span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
  			<br>
  				
			</div>
			<a href="index.php" class="w3-bar-item w3-button w3-mobile" >Home</a>
            <a href="aboutus.php" class="w3-bar-item w3-button w3-mobile" style="float:right;">About Us</a>
            <a href="news.php" class="w3-bar-item w3-button w3-mobile">News</a>
            <div class="w3-dropdown-hover w3-mobile">
                <button class="w3-button">Facilities</button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#" class="w3-bar-item w3-button">Link 1</a>
                    <a href="#" class="w3-bar-item w3-button">Link 2</a>
                    <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>
            </div>
            <a href="faculty.php" class="w3-bar-item w3-button w3-mobile">Faculty</a>
            <a href="alumini.php" class="w3-bar-item w3-button w3-mobile">Alumini</a>
		</nav>
      <script>
closeSidebar();
function openSidebar() {
    document.getElementById("mySidebar").style.display = "block";
}
function closeSidebar() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
    </div>
</div>
	