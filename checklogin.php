<?php
session_start();
$host="localhost"; // Host name
$username="apache"; // Mysql username
$password="info630!"; // Mysql password
$db_name="info630"; // Database name
$tbl_name="Members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
	$row=mysql_fetch_array($result);
	$mymemberName=$row['memberName']; 
	$myrole=$row['role'];
	$myNumber=$row['memberNumber'];

	// Register $myusername, $mypassword, $mymemberName, $myrole, and redirect to file "login_success.php"
	$_SESSION['login_user']=$myusername;
	$_SESSION['login_name']=$mymemberName;
	$_SESSION['login_role']=$myrole;
	$_SESSION['login_number']=$myNumber;
	$_SESSION['loggedIn'] = true;
	header("location:menu/main.php");
}
else {
	echo "Wrong Username or Password";
}
?>