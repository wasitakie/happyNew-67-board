<?php
session_start();
include '../config/connect.php';
$page4 = array('', $_POST["p27"], $_POST["p28"], $_POST["p29"], $_POST["p30"], $_POST["p31"], $_POST["p32"], $_POST["p33"], $_POST["p34"], $_POST["p35"], $_POST["p36"]);

$sumData = array('', '0', '25', '50', '75', '100');






$_SESSION["page4"] = $page4;





header("location: insertData.php");
