<?php
session_start();
include '../config/connect.php';
$page1 = array('', $_POST["p1-2"], $_POST["p1-3"], $_POST["p1-3t"], $_POST["p1-4"]);

$_SESSION["page1"] = $page1;


header("location: page2.php");