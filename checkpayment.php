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

$currentBalance = mysql_query($sql);

echo $currentBalance;

?>