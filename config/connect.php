<?php

$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "happynew67-board";


$con = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$con->exec("set names utf8");

// if ($con) {
//     echo "Connected successfully";
// } else {
//     echo "Connection failed";
// }