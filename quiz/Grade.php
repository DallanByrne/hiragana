
<?php
    error_reporting(0);
    $answer1 = $_POST['question-1-answers'];
	$answer2 = $_POST['question-2-answers'];
	$answer3 = $_POST['question-3-answers'];
	$answer4 = $_POST['question-4-answers'];
	$answer5 = $_POST['question-5-answers'];
	$answer6 = $_POST['question-6-answers'];
	$answer7 = $_POST['question-7-answers'];
	$answer8 = $_POST['question-8-answers'];
	$answer9 = $_POST['question-9-answers'];
	$answer10 = $_POST['question-10-answers'];
   

    $totalCorrect = 0;
    
    if ($answer1 == "D") { $totalCorrect++; }
	if($answer2 == "C"){ $totalCorrect++; }
	if($answer3 == "B"){ $totalCorrect++; }
	if($answer4 == "A"){ $totalCorrect++; }
	if($answer5 == "D"){ $totalCorrect++; }
	if($answer6 == "C"){ $totalCorrect++; }
	if($answer7 == "A"){ $totalCorrect++; }
	if($answer8 == "D"){ $totalCorrect++; }
	if($answer9 == "A"){ $totalCorrect++; }
	if($answer10== "B"){ $totalCorrect++; }
    
    echo "<div id='results'>$totalCorrect / 10 correct</div>";
	$math = $totalCorrect;
//header("Location: /Hiragana.php");
//die();    
?>
