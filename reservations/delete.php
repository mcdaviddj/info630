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
$tbl_name="ClassSignUp"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myreservationID=$_POST['deleteReservation'];

$sql="DELETE FROM $tbl_name WHERE reservationNumber = $myreservationID";

$result = mysql_query($sql);

if($result==1){
	header("location:/menu/main.php");
}

else {
	echo "An error occured";
	}
?>