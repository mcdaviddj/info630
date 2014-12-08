<?php
session_start();
if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
<html>
<head>
    <title>Average Joe's | Schedule a Class</title>
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
                            <strong>Schedule a Class</strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="78">Class</td>
                        <td width="6">:</td>
                        <td width="294"><select name="myclassSelect" id="myclassSelect" size="1">
                                <option values="#"></option>
                                <option value="1">Yoga</option>
                                <option value="3">Boxing</option>
                                <option value="4">Jazzercise</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Instructor</td>
                        <td>:</td>
                        <td><select name="myinstructorSelect" id="myinstructorSelect" size="1">
                                <option values="#"></option>
                                <option value="1">Peter La Fleur</option>
                                <option value="2">Kate Veatch</option>
                                <option value="3">Steve the Pirate</option>
                                <option value="4">Patches O'Houlihan</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Date/Time</td>
                        <td>:</td>
                        <td><input name="mydate" type="text" id="mydate" placeholder="YYYY-MM-DD HH:MM:SS"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                </table>
                </table>
            </td>
        </form>
    </tr>
</table>
</div>
</body>
</html>