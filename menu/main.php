<?php
    session_start();
    if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
<html>
<title>Average Joe's | Main Menu</title>
<body>
<h1>Main Menu</h1>
<h2>Welcome, <?=$_SESSION["login_name"]?>!</h2>
<a href="../members/view.php">Manage Members</a>
<br>
<a href="../class/view.php">Manage Classes</a>
<br>
<a href="../logout.php">Logout</a>
</body>
</html>
