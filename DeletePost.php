<title>Post deletion confirmation</title>
<?php

echo "<link rel='stylesheet' type='text/css' href='style.css' />";  
$mysqli = new mysqli("mysql.eecs.ku.edu", "pberger", "mysqlpassword", "pberger");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


echo "<br><br><center><h2>";








$mysqli->close();
?>