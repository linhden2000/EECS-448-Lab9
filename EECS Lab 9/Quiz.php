<?php

$question1 = $_POST["capital"];
$question2 = $_POST["cat"];
$question3 = $_POST["hours"];
$question4 = $_POST["days"];
$question5 = $_POST["dozen"];

$grade = 0;
if($question1 == "Washington"){
    $grade = $grade + 20;
}

if($question2 == "British short hair"){
    $grade = $grade + 20; 
}

if($question3 == "twenty-four"){
    $grade = $grade + 20; 
}

if($question4 == "seven"){
    $grade = $grade + 20; 
}

if($question5 == "twelve"){
    $grade = $grade + 20; 
}

echo "<p> Your answer: " . $question1 . " </p>";
echo "<p> Correct answer: Washington </p>";
echo "<br>";
echo "<p> Your answer: " . $question2 . " </p>";
echo "<p> Correct answer: British short hair</p>";
echo "<br>";
echo "<p> Your answer: " . $question3 . " </p>";
echo "<p> Correct answer: twenty-four</p>";
echo "<br>";
echo "<p> Your answer: " . $question4 . " </p>";
echo "<p> Correct answer: seven</p>";
echo "<br>";
echo "<p> Your answer: " . $question5 . " </p>";
echo "<p> Correct answer: twelve</p>";
echo "<br>";
echo "<p> Your final score is: " . $grade . "%</p>";

?>
