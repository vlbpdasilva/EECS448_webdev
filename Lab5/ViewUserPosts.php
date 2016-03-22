<title>View all users</title>
<?php

echo "<link rel='stylesheet' type='text/css' href='style.css' />";  
$mysqli = new mysqli("mysql.eecs.ku.edu", "pberger", "mysqlpassword", "pberger");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


echo "<br><br><center><h2>";

$user = $_POST["user"];

echo "<h1>Showing posts by user: " . $user . "</h1>";

$sql = "SELECT * FROM Posts WHERE author_id = '$user'";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
     echo "<br><table id = 'contents'><tr><th>POST ID:</th><th>CONTENT OF POST:</th></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["post_id"] . "</td><td>" . $row["content"] . "</td></tr>";
     }
     echo "</table>";
     
} else {
     echo "<h2>Sorry, no results found.</h2>";
}

$mysqli->close();
?>