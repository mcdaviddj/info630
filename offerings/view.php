<?php
session_start();
if($_SESSION["loggedIn"] != true) {
        echo("Access denied!");
        exit();
    }
?>
<html>
<head>
	<title>Average Joe's | Course Offerings</title>
</head>
<body>
<h1>View Course Offerings</h1>
<?php
    $host="localhost"; // Host name
    $username="apache"; // Mysql username
    $password="info630!"; // Mysql password
    $db_name="info630"; // Database name

    if (!mysql_connect($host, $username, $password))
        die("Can't connect to database");

    if (!mysql_select_db($db_name))
        die("Can't select database");

    // sending query
    $result = mysql_query("SELECT offeringNumber AS ID,className AS Name,classDescription AS Description,instructorName AS Instructor 
        FROM Class,ClassOffering,Instructor WHERE Class.classID = ClassOffering.classID AND ClassOffering.instructorID = Instructor.instructorID;");
    if (!$result) {
        die("Query to show fields from table failed");
    }

    $fields_num = mysql_num_fields($result);
    echo 'Return to <a href="../menu/main.php">Main Menu</a><br>';
    echo "Current Classes {$table}";
    echo "<table border='1'><tr>";
    
    // printing table headers
    for($i=0; $i<$fields_num; $i++){
        $field = mysql_fetch_field($result);
        echo "<td>{$field->name}</td>";
        }

    echo "</tr>\n";

    // printing table rows
    while($row = mysql_fetch_row($result)){
        echo "<tr>";

        // $row is array... foreach( .. ) puts every element
        // of $row to $cell variable
        foreach($row as $cell)
            echo "<td>$cell</td>";
        echo "</tr>\n";
        }

    echo "</table>";
    mysql_free_result($result);
?>
</form>
</body>
</html>