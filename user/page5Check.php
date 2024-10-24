<?php
session_start();
include '../config/connect.php';
$page5 = array('', $_POST["p37"], $_POST["p38"], $_POST["p39"]);

$sumData = array('', '0', '25', '50', '75', '100');

$WorkLifeBalance = ($sumData[$_POST["p37"]] + $sumData[$_POST["p38"]] + $sumData[$_POST["p39"]]) / 3;

$_SESSION["page5"] = $page5;


$_SESSION["WorkLifeBalance"] = $WorkLifeBalance;


header("location: page6.php");
