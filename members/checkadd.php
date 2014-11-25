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
$mymemberName=$_POST['mymemberName'];
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$myroleSelect=$_POST['myroleSelect'];
$mymemberPhone=$_POST['mymemberPhone'];
$mymembershipSelect=$_POST['mymembershipSelect'];


// To protect MySQL injection (more detail about MySQL injection)
$mymemberName = stripslashes($mymemberName);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$mymemberPhone = stripslashes($mymemberPhone);
$mymemberName = mysql_real_escape_string($mymemberName);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mymemberPhone = mysql_real_escape_string($mymemberPhone);


$sql="INSERT INTO $tbl_name (username,password,role,memberName,memberAccountBalance,memberPhone,membershipkey) VALUES ('$myusername','$mypassword','$myroleSelect','$mymemberName',0,'$mymemberPhone',$mymembershipSelect)";

$result = mysql_query($sql);

if($result==1){
	header("location:view.php");
}

else {
	echo "An error occured";
	}
?>