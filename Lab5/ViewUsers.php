<title>View all users</title>
<?php

echo "<link rel='stylesheet' type='text/css' href='style.css' />";  
$mysqli = new mysqli("mysql.eecs.ku.edu", "pberger", "mysqlpassword", "pberger");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "<br><br><center><h2> LIST OF ALL USERS REGISTERED (IN ORDER OF REGISTRATION)<br><br>";

$sql = "SELECT * FROM Users ORDER BY user_id DESC";
$result = $mysqli->query($sql);
$counter; 

if ($result->num_rows > 0) {
  
     while($row = $result->fetch_assoc()) {
         echo "<br> User " . ++$counter . ": " . $row["user_id"] . "<br>";
     }
     
} else {
     echo "<h2>Sorry, no results found.</h2>";
}

echo "<br><br><a class='button' id='button1' href='lab5_main.html'> Return to forum homepage </a> ";
echo "</h2></center>";

$mysqli->close();
?>