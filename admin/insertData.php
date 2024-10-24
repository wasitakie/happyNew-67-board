<?php
session_start();
include '../config/connect.php';

if ($_GET["g"]  == "addNew") {

    $in = $con->prepare(" INSERT INTO company(cp_name, cp_code, cp_sector)VALUES(?,?,?)");
    $in->execute([$_POST["name"], $_POST["code"], $_POST["sector"]]);
    if (!empty($in)) {
        header("location: mainPage.php");
    } else {
        header("location: index.php");
    }
}

if ($_GET["g"] == "upStatus") {

    $status = $_POST["dataUp"];
    $id = $_POST["idUp"];

    $up = $con->prepare(" UPDATE company SET cp_status = ? WHERE cp_id = ? ");
    $up->execute([$status, $id]);
}

if ($_GET["g"] == "editForm") {

    $id = $_POST["upDate"];

    $up = $con->prepare(" UPDATE company SET cp_name = ?, cp_code = ?, cp_sector = ? WHERE cp_id = ? ");
    $up->execute([$_POST["name"], $_POST["code"], $_POST["sector"], $id]);

    if (!empty($up)) {
        header("location: mainPage.php");
    } else {
        header("location: mainPage.php");
    }
}


if ($_GET["g"] == "delete") {

    $id = $_GET["id"];

    $de = $con->prepare(" DELETE FROM company WHERE cp_id = ? ");
    $de->execute([$id]);

    if (!empty($de)) {
        header("location: mainPage.php");
    } else {
        header("location: mainPage.php");
    }
}
