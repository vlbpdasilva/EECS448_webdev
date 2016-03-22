<title>Post Creation Confirmation</title>
<?php

echo "<link rel='stylesheet' type='text/css' href='style.css' />";  
$mysqli = new mysqli("mysql.eecs.ku.edu", "pberger", "mysqlpassword", "pberger");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


echo "<br><br><center>";

$username = $_POST["username"];
$posttext = $_POST["post"];
$result = $mysqli->query("SELECT * FROM Users WHERE user_id = '$username'");

if ($username == "")
    {
        echo "<h1>Error: empty username.</h1>"; 
    }
elseif ($result->num_rows === 0)
    {
        echo "<h1>Error: user does not exist.</h1>"; 
    }
        
if ($posttext == "")
    {
        echo "<h1>Error: empty post.</h1>";
    
    }
  
else if (!$username == "" && $result->num_rows > 0)
    {
        $sql = $mysqli->query("INSERT INTO Posts (content, author_id) VALUES ('$posttext','$username')");
        echo "<h1>Post uploaded successfully.</h1>";
    }
      
echo "<br><br><a class='button' id='button1' href='lab5_main.html'> Return to forum homepage </a>";     
echo "</center>";

$mysqli->close();
?>