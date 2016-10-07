<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$q1 = "Select the correct answer";
$q2 = "What is my name?";
$q3 = "What is the capital of Kansas?";
$q4 = "What class is this quiz for?";
$q5 = "What is the airspeed velocity of an unladen swallow in meters per second?";
$questionArray = array($q1,$q2,$q3,$q4,$q5);
$correct1 = "Correct";
$correct2 = "Jack";
$correct3 = "Topeka";
$correct4 = "Software Engineering";
$correct5 = 12;
$correctArray = array($correct1,$correct2,$correct3,$correct4,$correct5);
$score = 0;
$numCorrect = 0;
$ans1 = $_POST["q1"];
$ans2 = $_POST["q2"];
$ans3 = $_POST["q3"];
$ans4 = $_POST["q4"];
$ans5 = $_POST["q5"];
$ansArray = array($ans1,$ans2,$ans3,$ans4,$ans5);
echo "<p>";
for ($i=0; $i < count($questionArray); $i++) {
  if ($correctArray[$i]==$ansArray[$i]) {
    $score += 20;
    $numCorrect += 1;
  }
  $qnum = $i+1;
  echo "<br>Question ".$qnum.":".$questionArray[$i]."<br>";
  echo "You answered: ".$ansArray[$i]."<br>";
  echo "Correct answer: ".$correctArray[$i]."<br>";
}
echo "<br>You got ".$numCorrect." right for ".$score."%";
?>
