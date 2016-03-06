<title>Quiz Results</title>

<?php
    
    $answer1 = $_POST["Q1_answer"];
    $answer2 = $_POST["Q2_answer"];
    $answer3 = $_POST["Q3_answer"];
    $answer4 = $_POST["Q4_answer"];
    $answer5 = $_POST["Q5_answer"];

    $score = 0; 
    	
    if ($answer1 == "2") { $score++; }
    if ($answer2 == "Apple") { $score++; }
    if ($answer3 == "James Monroe") { $score++; }
    if ($answer4 == "Terry Brown") { $score++; }
    if ($answer5 == "Eaton Hall") { $score++; }
    
	$percent = $score / 0.05;
	
	echo "<h1> Your score is: " . $percent . "%  (" . $score . "/5)";
	
	echo "</h1><h3>";
	
	echo "Question 1: What's 1+1? <br>";
	echo "You answered: " . $answer1; 
	echo "<br>";
	echo "Correct answer: 2";
	echo "<br><br>";
	
	echo "Question 2: Which of these words starts with the letter A? <br>";
	echo "You answered: " . $answer2; 
	echo "<br>";
	echo "Correct answer: Apple ";
	echo "<br><br>";
	
	echo "Question 3: Who was the 5th president of the United States? <br>";
	echo "You answered: " . $answer3; 
	echo "<br>";
	echo "Correct answer: James Monroe";
	echo "<br><br>";
	
	echo "Question 4: Who holds the KU basketball record for most 3-pointers 
	in a game with 11?  <br>";
	echo "You answered: " . $answer4; 
	echo "<br>";
	echo "Correct answer: Terry Brown";
	echo "<br><br>";
	
	echo "Question 5: Where is the EECS department located at KU?  <br>";
	echo "You answered: " . $answer5; 
	echo "<br>";
	echo "Correct answer: Eaton Hall";
	
	echo "</h3>";
?>
