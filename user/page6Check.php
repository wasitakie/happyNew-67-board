<?php
session_start();
include '../session/user.php';
include '../config/connect.php';


$page6 = array('', $_POST["p40"], $_POST["p41"], $_POST["p42"], $_POST["p43"], $_POST["p44"], $_POST["p45"], $_POST["p46"]);

$_SESSION["page6"]  = $page6;





header("location: insertData.php");
