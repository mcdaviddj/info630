<?php

session_start();

if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }

$host="localhost"; // Host name
$username="apache"; // Mysql username
$password="info630!"; // Mysql password
$db_name="info630"; // Database name
$tbl_name="Class"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Member details sent from form
$myclassName=$_POST['myclassName'];
$myclassDescription=$_POST['myclassDescription'];

// To protect MySQL injection (more detail about MySQL injection)
$myclassName = stripslashes($myclassName);
$myclassDescription = stripslashes($myclassDescription);

$sql="INSERT INTO $tbl_name (className,classDescription,dateFirstOffered) VALUES ('$myclassName','$myclassDescription',Now())";

$result = mysql_query($sql);

if($result==1){
	header("location:view.php");
}

else {
	echo "An error occured";
	}
?>