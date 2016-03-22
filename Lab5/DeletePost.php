<title>Post deletion confirmation</title>
<?php

echo "<link rel='stylesheet' type='text/css' href='style.css' />";  
$mysqli = new mysqli("mysql.eecs.ku.edu", "pberger", "mysqlpassword", "pberger");


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


echo "<br><br><center><h2>";

    $postsToDelete = $_POST['posts'];
    
    if(!empty($postsToDelete))
    {
        echo "You deleted the following posts:<br><br><table><tr><th>POST ID:</th></tr>";
        foreach ($postsToDelete as $deleted)
        {    
            echo "<tr><td>" . $deleted . "</td></tr>";
            $mysqli->query("DELETE FROM Posts WHERE post_id = '$deleted'"); 
        }
        
    }
    
    else 
    {
        echo "No posts selected.";
    }



    echo "</table>";
	echo "<br><br><a class='button' id='button1' href='lab5_main.html'> Return to forum homepage </a>";     
	echo "</center>";

$mysqli->close();
?>
