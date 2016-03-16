<title>User Creation Confirmation</title>
<?php

echo "<link rel='stylesheet' type='text/css' href='style.css' />";  
$mysqli = new mysqli("mysql.eecs.ku.edu", "pberger", "mysqlpassword", "pberger");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


echo "<br><br><center>";

$username = $_POST["username"];

if ($username == "")
    {
        echo "<h1>Error: empty username.</h1>";
    
    }
    
else
{
    $sql = "INSERT INTO Users (user_id) VALUES ('$username')";


    if ($mysqli->query($sql) === TRUE) {
        echo "<h1>New user created successfully.</h1>";
    } else {
        echo "<h1>Error: username already exists.</h1>";
    }

}


echo "</center>";

$mysqli->close();
?>