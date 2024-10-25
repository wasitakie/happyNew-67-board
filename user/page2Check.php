<?php
session_start();
include '../session/user.php';
include '../config/connect.php';
$page2 = array('', $_POST["sex"], $_POST["age"], $_POST["p2-3"], $_POST["p2-3t"], $_POST["p2_4t"], $_POST["p2-5-1"], $_POST["p2-5-2"], $_POST["p2-5-3"], $_POST["p2-5-4"], $_POST["p2-5-5"], $_POST["p2-5-6"], $_POST["p2-5-7"], $_POST["p2-5-8"], $_POST["p2-5-9"], $_POST["p2-5-10"], $_POST["p2-5-11"], $_POST["p2-5t"], $_POST["p2-6-1"], $_POST["p2-6-2"], $_POST["p2-6-3"], $_POST["p2-6-4"], $_POST["p2-6-5"], $_POST["p2-6-6"], $_POST["p2-6-7"], $_POST["p2-6-8"], $_POST["p2-6-9"], $_POST["p2-6-10"], $_POST["p2-6-11"], $_POST["p2-6-12"], $_POST["p2-6t"]);





$sumData = array('', '0', '25', '50', '75', '100');

$_SESSION["page2"] = $page2;

header("location: page3.php");
