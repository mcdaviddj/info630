<?php
session_start();
if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
<html>
<head>
    <title>Average Joe's | Add Member</title>
    <link rel="stylesheet" href="/style.css" type="text/css" />
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

<table width="300" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <form name="form1" method="post" action="checkadd.php">
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3">
                            <strong>New Member</strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="78">Full Name</td>
                        <td width="6">:</td>
                        <td width="294"><input name="mymemberName" type="text" id="mymemberName"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input name="myusername" type="text" id="myusername"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input name="mypassword" type="password" id="mypassword"></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>:</td>
                        <td><select name="myroleSelect" id="myroleSelect" size="1"><option value="member">Member</option><option value="instructor">Instructor</option><option value="staff">Staff</option><option value="manager">Manager</option></select></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>:</td>
                        <td><input name="mymemberPhone" type="text" id="mymemberPhone"></td>
                    </tr>
                    <tr>
                        <td>Account Type</td>
                        <td>:</td>
                        <td><select name="mymembershipSelect" id="mymembershipSelect" size="1"><option value="1">Preferred</option><option value="2">Silver</option><option value="3">Gold</option><option value="4">Platinum</option></select></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                </table>
            </td>
        </form>
    </tr>
</table>

</div>

</body>
</html>