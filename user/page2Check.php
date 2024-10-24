<?php
session_start();
include '../config/connect.php';
$page2 = array('', $_POST["sex"], $_POST["age"], $_POST["p2-3"], $_POST["p2-3t"], $_POST["p2-4"], $_POST["p2-5t"]);
$sumData = array('', '0', '25', '50', '75', '100');

$_SESSION["page2"] = $page2;

header("location: page3.php");