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
$tbl_name="ClassOffering"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Member details sent from form
$myclassSelect=$_POST['myclassSelect'];
$myinstructorSelect=$_POST['myinstructorSelect'];
$mydate=$_POST['mydate'];

// To protect MySQL injection (more detail about MySQL injection)
$mydate = stripslashes($mydate);

$sql="INSERT INTO $tbl_name (classID,date_time,instructorID) VALUES ($myclassSelect,'$mydate',$myinstructorSelect)";

$result = mysql_query($sql);

if($result==1){
	header("location:/menu/main.php");
}

else {
	echo "An error occured";
	}
?>