<?php
    session_start();
    if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
<html>
<head>
<title>Average Joe's | Main Menu</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Main Menu</h1>
<h2>Welcome, <?=$_SESSION["login_name"]?>!</h2>
<h3>Your current role is: <?=$_SESSION["login_role"]?></h3>

<!-- Shows various menu options based on session variable 'login_role' -->
<?php 
	// Manager View
	if($_SESSION["login_role"] == 'manager') {
		echo '<a href="../class/view.php">Manage Classes</a><br>';
	}

	// Member View
	if($_SESSION["login_role"] == 'member') {
		echo '<a href="../offerings/view.php">View Available Classes</a><br>';
	}

	// Instructor View
	if($_SESSION["login_role"] == 'instructor') {
		echo '<a href="../instructor/avail.php">Manage Availability</a><br>';
	}

	// Staff View
	if($_SESSION["login_role"] == 'staff') {
		echo '<a href="../members/view.php">Manage Members</a><br>';
	}

	// Admin View (Shows all links for testing purposes)
	if($_SESSION["login_role"] == 'admin') {
		echo '<a href="../members/view.php">Manage Members</a><br>';
		echo '<a href="../class/view.php">Manage Classes</a><br>';
		echo '<a href="../offerings/view.php">View Available Classes</a><br>';
		echo '<a href ="../instructor/avail.php">Manage Availablity</a><br>';
	}
?>
<a href="../logout.php">Logout</a>
</body>
</html>
