<?php
session_start();
include '../config/connect.php';
$page4 = array('', $_POST["p27"], $_POST["p28"], $_POST["p29"], $_POST["p30"], $_POST["p31"], $_POST["p32"], $_POST["p33"], $_POST["p34"], $_POST["p35"], $_POST["p36"]);

$sumData = array('', '0', '25', '50', '75', '100');



$say = ($sumData[$_POST["p27"]] + $sumData[$_POST["p28"]] + $sumData[$_POST["p29"]]) / 3;

$stay = ($sumData[$_POST["p30"]] + $sumData[$_POST["p31"]] + $sumData[$_POST["p32"]]) / 3;


$strive = ($sumData[$_POST["p33"]] + $sumData[$_POST["p34"]] + $sumData[$_POST["p35"]]) / 3;

$Engagement = ($say + $stay + $strive) / 3;


$_SESSION["page4"] = $page4;

$_SESSION["engagement"] = $Engagement;


header("location: page5.php");
