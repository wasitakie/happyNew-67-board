<?php
session_start();
include '../config/connect.php';
$page3 = array('', $_POST["p3-1"], $_POST["p3-2"], $_POST["p3-3"], $_POST["p3-4"]);

$sumData = array('', '0', '25', '50', '75', '100');




$_SESSION["page3"] = $page3;




header("location:page4.php");
