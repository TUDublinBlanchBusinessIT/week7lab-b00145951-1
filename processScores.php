<?php

#Include the Team.php file
require_once 'Team.php';

if ($_SERVER['REQUEST_METHOD']==='GET') {
#Get teamName 
$teamName = $_GET['teamName'];

#Instantiate Team object
$homeTeam = new Team($teamName);

#Average goal for each match
$ht1 = $_GET['home1'];
$at1 = $_GET['away1'];   
$ht2 = $_GET['home2'];
$at2 = $_GET['away2'];
$ht3 = $_GET['home3'];
$at3 = $_GET['away3'];

#Final Score 
$homeTeam->finalScore($ht1, $at1);
$homeTeam->finalScore($ht2, $at2);
$homeTeam->finalScore($ht3, $at3);

echo "Match Goal Average: " . $homeTeam->getGoalAverage();
}
?>





