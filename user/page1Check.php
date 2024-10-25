<?php
session_start();
include '../config/connect.php';
$page1 = array('', $_POST["p1-1t"], $_POST["p1-2"], $_POST["p1_2_1t"], $_POST["p1_2_2t"], $_POST["p1-2t"], $_POST["p1_3"]);

$_SESSION["page1"] = $page1;


header("location: page2.php");
