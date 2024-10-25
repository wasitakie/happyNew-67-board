<?php
session_start();
include '../config/connect.php';
date_default_timezone_set('Asia/Bangkok');
$datetime = date("d/m/") . (date("Y") + 543) . " " . date("H:i:s");


$page1 = $_SESSION["page1"];
$page2 = $_SESSION["page2"];
$page3 = $_SESSION["page3"];
$page4 = $_SESSION["page4"];


$ck = $con->prepare("SELECT * FROM insert_data WHERE id_code = ?");
$ck->execute([$_SESSION["idCode"]]);
$n = $ck->rowCount();

if ($n == 0) {
    try {
        $in = $con->prepare("INSERT INTO insert_data(cp_name, cp_code, cp_sector, p1_1t, p1_2, p1_2_1t, p1_2_2t, p1_2t, p1_3, sex, age, p2_3, p2_3t, p2_4t, p2_5_1, p2_5_2, p2_5_3, p2_5_4, p2_5_5, p2_5_6, p2_5_7, p2_5_8, p2_5_9, p2_5_10, p2_5_11, p2_5t, p2_6_1, p2_6_2, p2_6_3, p2_6_4, p2_6_5, p2_6_6, p2_6_7, p2_6_8, p2_6_9, p2_6_10, p2_6_11, p2_6_12, p2_6t, p3_1, p3_2, p3_3, p3_4, p4_1_1, p4_1_2, p4_1_3, p4_2_1, p4_2_2, p4_2_3, p4_3_1, p4_3_2, p4_4_1, p4_4_2, p4_5_1, p4_5_2, p4_5_3, p4_5_4, p4_5_5, p4_6_1, p4_6_2, p4_7_1, p4_7_2, date_time, id_code) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $in->execute([$_SESSION["nameCompany"], $_SESSION["codeCompany"], $_SESSION["sectorCompany"], $page1[1], $page1[2], $page1[3], $page1[4], $page1[5], $page1[6], $page2[1], $page2[2], $page2[3], $page2[4], $page2[5], $page2[6], $page2[7], $page2[8], $page2[9], $page2[10], $page2[11], $page2[12], $page2[13], $page2[14], $page2[15], $page2[16], $page2[17], $page2[18], $page2[19], $page2[20], $page2[21], $page2[22], $page2[23], $page2[24], $page2[25], $page2[26], $page2[27], $page2[28], $page2[29], $page2[30], $page3[1], $page3[2], $page3[3], $page3[4], $page4[1], $page4[2], $page4[3], $page4[4], $page4[5], $page4[6], $page4[7], $page4[8], $page4[9], $page4[10], $page4[11], $page4[12], $page4[13], $page4[14], $page4[15], $page4[16], $page4[17], $page4[18], $page4[19], $datetime, $_SESSION["idCode"]]);

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
