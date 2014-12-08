<?php
    session_start();
    if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
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
<h1><center><img src="/images/average-joes-31.gif"style="width:400px;height:200px"> </h1>


</div>
</div>
<div id="container">
	<div id="header">
	
	</div>
	<div id="navigation">
		<ul>
			<li><a href="/index.php">Home</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</div>
	<div id="content-container">
		<div id="section-navigation">
			<ul>
				
			</ul>
		</div>
		<div id="content">
			<head>
				<center><title>Average Joe's | Main Menu</title>
				<link rel="stylesheet" href="/style.css" type="text/css" />
			</head>
			<body>
				<h1>Main Menu</h1>
				<h2>Welcome, <?=$_SESSION['login_name'];?>!</h2>
				<h3>Your current role is: <?=$_SESSION['login_role'];?></h3>

<!-- Shows various menu options based on session variable 'login_role' -->
	<?php 
	// Manager View
	if($_SESSION["login_role"] == 'manager') {
		echo '<a href="../class/view.php">Manage Classes</a><br>';
		echo '<a href="../offerings/add.php">Schedule a Class<a/><br>';
		echo '<a href="../members/view.php">Manage Members</a><br>';
	}

	// Member View
	if($_SESSION["login_role"] == 'member') {
		echo '<a href="../offerings/view.php">View Available Classes</a><br>';
		echo '<a href="../reservations/delete.php">Cancel Class Reservations</a><br>';
	}

	// Instructor View
	if($_SESSION["login_role"] == 'instructor') {
		echo '<a href="../instructor/avail.php">Manage Availability</a><br>';
	}

	// Staff View
	if($_SESSION["login_role"] == 'staff') {
		echo '<a href="../members/view.php">Manage Members</a><br>';
		echo '<a href="../payments.php">Process Payments</a><br>';
		echo '<a href="../reservations/view.php">Manage Class Reservations</a><br>';
	}

	// Admin View (Shows all links for testing purposes)
	if($_SESSION["login_role"] == 'admin') {
		echo '<a href="../members/view.php">Manage Members</a><br>';
		echo '<a href="../class/view.php">Manage Classes</a><br>';
		echo '<a href="../offerings/view.php">View Available Classes</a><br>';
		echo '<a href="../instructor/avail.php">Manage Availablity</a><br>';
		echo '<a href="../offerings/add.php">Schedule a Class<a/><br>';
		echo '<a href="../payments.php">Process Payments</a><br>';
	}
?>
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




</body>
</html>
