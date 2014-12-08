<?php
session_start();
if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
<html>
<head>
<title>Average Joe's | Process Payment</title>
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
        <form name="form1" method="post" action="checkpayment.php">
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3">
                            <strong>Process Payment</strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="78">User ID</td>
                        <td width="6">:</td>
                        <td width="294"><input name="mymemberNumber" type="text" id="mymemberNumber"></td>
                    </tr>
                    <tr>
                        <td>Payment</td>
                        <td>:</td>
                        <td><input name="mypayment" type="text" id="mypayment"></td>
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