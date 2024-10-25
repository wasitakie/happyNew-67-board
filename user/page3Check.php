<?php
session_start();
include '../config/connect.php';
$page3 = array('', $_POST["weight"], $_POST["height"], $_POST["waist"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"], $_POST["p6"], $_POST["p7"], $_POST["p8"], $_POST["p9"], $_POST["p10"], $_POST["p11"], $_POST["p12"], $_POST["p13"], $_POST["p14"], $_POST["p15"], $_POST["p16"], $_POST["p17"], $_POST["p18"], $_POST["p19"], $_POST["p20"], $_POST["p21"], $_POST["p22"], $_POST["p23"], $_POST["p24"], $_POST["p25"], $_POST["p26"]);

$sumData = array('', '0', '25', '50', '75', '100');




$_SESSION["page3"] = $page3;




header("location:page4.php");
