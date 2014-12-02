<?session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Average Joe's Fitness Studio</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="all">
<div id="header">
<h1><center><img src="images/average-joes-31.gif"style="width:400px;height:200px"> </h1>


</div>
</div>
<div id="container">
	<div id="header">
	
	</div>
	<div id="navigation">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="contact.php">Contact us</a></li>
			<li><a href="login.php">Login</a></span></li>
			<? if($_SESSION["loggedIn"] != false) {echo("<li><a href='menu/main.php'>Main Menu</a></span></li>");}?>
		</ul>
	</div>
	<div id="content-container">
		<div id="section-navigation">
			<ul>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Instructors</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>
				<center><img src="images/Average-Joe4.gif "style="width:200px;height:200px">
			</h2>
			<p>
				I'm Peter LaFleur, owner and operator of Average Joe's gym and I'm here to tell you, you're perfect the way you are. But if you feel like losing a few pounds, eating healthier and making a few friends in the process, then Joe's is the place for you. Don't forget, youth dodge ball classes are forming right now. So learn a great game like it's supposed to be played. 
			</p>
			<p>
				
			</p>
			<p>
				
			</p>
		</div>
		<div id="aside">
			<h3>
				<img src="http://farmstrong.ca/wp-content/uploads/2012/04/CnJ.png"style="width:200px;height:250px">
			</h3>
			<p>
				
			</p>
		</div>
		
		</div>
	
</body>
</html>

