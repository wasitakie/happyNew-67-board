<?php
session_start();
include '../config/connect.php';

$se = $con->prepare(" SELECT* FROM admin WHERE user = ? AND  pass = ? ");
$se->execute([$_POST["user"], $_POST["pass"]]);
$n = $se->rowCount();

if ($n == 1) {
    $r = $se->fetch(PDO::FETCH_ASSOC);

    $_SESSION["adminUser"] = $r["user"];
    $_SESSION["adminPass"] = $r["pass"];

    header("location: mainPage.php");
} else {
    header("location: index.php");
}
