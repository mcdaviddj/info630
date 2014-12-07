<?php
session_start();
if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
<html>
<head>
<title>Average Joe's | Create Class</title>
</head>
<body>
<table width="300" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <form name="form1" method="post" action="checkadd.php">
            <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3">
                            <strong>New Class</strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="78">Class Name</td>
                        <td width="6">:</td>
                        <td width="294"><input name="myclassName" type="text" id="myclassName"></td>
                    </tr>
                    <tr>
                        <td>Class Description</td>
                        <td>:</td>
                        <td><input style="height:200px" name="myclassDescription" type="text" id="myclassDescription"></td>
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

</body>
</html>