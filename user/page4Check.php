<?php
session_start();
include '../session/user.php';
include '../config/connect.php';
$page4 = array('', $_POST["p4-1-1"], $_POST["p4-1-2"], $_POST["p4-1-3"], $_POST["p4-2-1"], $_POST["p4-2-2"], $_POST["p4-2-3"], $_POST["p4-3-1"], $_POST["p4-3-2"], $_POST["p4-4-1"], $_POST["p4-4-2"], $_POST["p4-5-1"], $_POST["p4-5-2"], $_POST["p4-5-3"], $_POST["p4-5-4"], $_POST["p4-5-5"], $_POST["p4-6-1"], $_POST["p4-6-2"], $_POST["p4-7-1"], $_POST["p4-7-2"]);

$sumData = array('', '0', '25', '50', '75', '100');






$_SESSION["page4"] = $page4;





header("location: insertData.php");
