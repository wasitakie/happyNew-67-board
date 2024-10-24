<?php
session_start();
include '../config/connect.php';
$page3 = array('', $_POST["weight"], $_POST["height"], $_POST["waist"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"], $_POST["p6"], $_POST["p7"], $_POST["p8"], $_POST["p9"], $_POST["p10"], $_POST["p11"], $_POST["p12"], $_POST["p13"], $_POST["p14"], $_POST["p15"], $_POST["p16"], $_POST["p17"], $_POST["p18"], $_POST["p19"], $_POST["p20"], $_POST["p21"], $_POST["p22"], $_POST["p23"], $_POST["p24"], $_POST["p25"], $_POST["p26"]);

$sumData = array('', '0', '25', '50', '75', '100');

$happyBody = ($sumData[$_POST["p2"]] + $sumData[$_POST["p3"]] + $sumData[$_POST["p4"]] + $sumData[$_POST["p5"]] + $sumData[$_POST["p6"]] + $sumData[$_POST["p7"]] + $sumData[$_POST["p8"]] + $sumData[$_POST["p9"]]) / 8;

$happyRelax = ($sumData[$_POST["p10"]] + $sumData[$_POST["p11"]]) / 2;

$happyHeart = $sumData[$_POST["p12"]];

$happySoul = $sumData[$_POST["p13"]];

$happyFamily = $sumData[$_POST["p14"]];

$happySociety = ($sumData[$_POST["p15"]] + $sumData[$_POST["p16"]]) / 2;

$happyBrain = $sumData[$_POST["p17"]];

$happyMoney = ($sumData[$_POST["p18"]] + $sumData[$_POST["p19"]] + $sumData[$_POST["p20"]]) / 3;


$happyWorkLife = ($sumData[$_POST["p21"]] + $sumData[$_POST["p22"]] + $sumData[$_POST["p23"]] + $sumData[$_POST["p24"]] + $sumData[$_POST["p25"]]) / 5;


$_SESSION["page3"] = $page3;
$_SESSION["happyBody"] = $happyBody;
$_SESSION["happyRelax"] = $happyRelax;
$_SESSION["happyHeart"] = $happyHeart;
$_SESSION["happySoul"] = $happySoul;
$_SESSION["happyFamily"] = $happyFamily;
$_SESSION["happySociety"] = $happySociety;
$_SESSION["happyBrain"] = $happyBrain;
$_SESSION["happyMoney"] = $happyMoney;
$_SESSION["happyWorkLife"] = $happyWorkLife;




header("location:page4.php");
