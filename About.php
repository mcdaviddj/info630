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
			<li><a href="index.php">Home</a></span></li>
			<li><a href="about.php">About</a></span></li>
			<li><a href="services.php">Services</a></span></li>
			<li><a href="contact.php">Contact</a></span></li>
			<li><a href="login.php">Login</a></span></li>
			<? if($_SESSION["loggedIn"] != false) {echo("<li><a href='menu/main.php'>Main Menu</a></span></li>");}?>
		</ul>
	</div>
	<div id="content-container">
		<div id="section-navigation">
			<ul>
				<li><a href="gallery.php">Gallery</a></span></li>
				<li><a href="instructors.php">Instructors</a></span></li>
			</ul>
		</div>
		<div id="content">
			<h2>
				Mission Statement
			</h2>
			<p>
				<p><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRYGIRQZIdLisaqXeemRVJtKb6_Mgeh3gsFUBC4HYfNBB29lsa85w "style="width:40px;height:40px">Dodge</p> 
				<p><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRYGIRQZIdLisaqXeemRVJtKb6_Mgeh3gsFUBC4HYfNBB29lsa85w "style="width:40px;height:40px">Duck </p>
				<p><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRYGIRQZIdLisaqXeemRVJtKb6_Mgeh3gsFUBC4HYfNBB29lsa85w "style="width:40px;height:40px">Dip</p>
				<p><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRYGIRQZIdLisaqXeemRVJtKb6_Mgeh3gsFUBC4HYfNBB29lsa85w "style="width:40px;height:40px">Dive</p>
				<p><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRYGIRQZIdLisaqXeemRVJtKb6_Mgeh3gsFUBC4HYfNBB29lsa85w "style="width:40px;height:40px">Dodge</p>
			</p>
			<p>
				
			</p>
			<p>
				
			</p>
		</div>
		<div id="aside">
			<h3>


				<img src="http://farmstrong.ca/wp-content/uploads/2012/04/CnJ.png "style="width:200px;height:250px" 
			</h3>
			<p>
				
			</p>
		</div>
		
		</div>
	
</body>
</html>

