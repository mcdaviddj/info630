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
$tbl_name="Members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Member details sent from form
$mymemberNumber=$_POST['mymemberNumber'];
$mypayment=$_POST['mypayment'];

// Get current balance
$sql="SELECT memberAccountBalance FROM Members WHERE memberNumber = $mymemberNumber";

$result = mysql_query($sql);

$row = mysql_fetch_array($result, MYSQL_NUM);

$oldBalance = $row[0];

$currentBalance = $oldBalance - $mypayment;

$sql2="INSERT INTO Payment (memberNumber,paymentDate,paymentAmount) VALUES ($mymemberNumber,NOW(),$mypayment)";
$result2= mysql_query($sql2);

$sql="UPDATE Members SET memberAccountBalance = $currentBalance WHERE memberNumber = $mymemberNumber";

$sql2="INSERT INTO Payment (memberNumber,paymentDate,paymentAmount) VALUES ($mymemberNumber,NOW(),$mypayment)";

$result = mysql_query($sql);

if($result==1){
	header("location:../menu/main.php");
}

else {
	echo "An error occured";
	}

?>