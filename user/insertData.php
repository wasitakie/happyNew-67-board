<?php
session_start();
include '../config/connect.php';
date_default_timezone_set('Asia/Bangkok');
$datetime = date("d/m/") . (date("Y") + 543) . " " . date("H:i:s");


$page1 = $_SESSION["page1"];
$page2 = $_SESSION["page2"];
$page3 = $_SESSION["page3"];
$page4 = $_SESSION["page4"];
$page5 = $_SESSION["page5"];
$page6 = $_SESSION["page6"];

$ck = $con->prepare("SELECT * FROM insert_data WHERE id_code = ?");
$ck->execute([$_SESSION["idCode"]]);
$n = $ck->rowCount();

if ($n == 0) {
    try {
        $in = $con->prepare("INSERT INTO insert_data(cp_name,cp_code,cp_sector,p1_2, p1_3, p1_3t, p1_4, sex, age, p2_3, p2_3t, p2_4, p2_5t, weight, height, waist, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30, p31, p32, p33, p34, p35, p36, p37, p38, p39, p40, p41, p42, p43, p44, p45, p46, date_time,id_code) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $in->execute([$_SESSION["nameCompany"], $_SESSION["codeCompany"], $_SESSION["sectorCompany"], $page1[1], $page1[2], $page1[3], $page1[4], $page2[1], $page2[2], $page2[3], $page2[4], $page2[5], $page2[6], $page3[1], $page3[2], $page3[3], $page3[4], $page3[5], $page3[6], $page3[7], $page3[8], $page3[9], $page3[10], $page3[11], $page3[12], $page3[13], $page3[14], $page3[15], $page3[16], $page3[17], $page3[18], $page3[19], $page3[20], $page3[21], $page3[22], $page3[23], $page3[24], $page3[25], $page3[26], $page3[27], $page3[28], $page4[1], $page4[2], $page4[3], $page4[4], $page4[5], $page4[6], $page4[7], $page4[8], $page4[9], $page4[10], $page5[1], $page5[2], $page5[3], $page6[1], $page6[2], $page6[3], $page6[4], $page6[5], $page6[6], $page6[7], $datetime, $_SESSION["idCode"]]);

        if ($in) {
            header("Location: showData.php");
        } else {
            echo "error";
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    header("Location: index.php?id=" . $_SESSION["idCodeCompany"] . "");
}
