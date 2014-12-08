<?php
session_start();
require "calendar.php";
if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Average Joe's | Manage Availability</title>
	<link rel="stylesheet" href="../style.css" type="text/css" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
            <? print calendar("", "", "", 1); ?>
            <input type="submit" name="Submit" value="Submit">
        </dvi>
</body>
</html>