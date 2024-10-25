<?php
ob_start();
session_start();
include("session/adminSession.php");
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="' . $_GET["id"] . '.xls"'); #ชื่อไฟล์
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel"
    xmlns="http://www.w3.org/TR/REC-html40">

<HTML>

<HEAD>

    <meta charset="UTF-8">

</HEAD>

<BODY>

    <TABLE x:str BORDER="1">

        <TR>

            <td>ลำดับที่</td>
            <td>ชื่อบริษัท</td>
            <td>รหัสบริษัท</td>
            <td>Sector</td>
            <td>p1.1t</td>
            <td>p1.2</td>
            <td>p1.2.1t</td>
            <td>p1.2.2t</td>
            <td>p1_2t</td>
            <td>p1_3</td>


            <td>sex</td>
            <td>age</td>
            <td>q2_3</td>
            <td>q2_3t</td>
            <td>q2_4t</td>



            <td>2_5_1</td>
            <td>2_5_2</td>
            <td>2_5_3</td>
            <td>2_5_4</td>
            <td>2_5_5</td>
            <td>2_5_6</td>
            <td>2_5_7</td>
            <td>2_5_8</td>
            <td>2_5_9</td>
            <td>2_5_10</td>
            <td>2_5_11</td>
            <td>2_5t</td>
            <!-- <td>cv1</td> -->

            <td>2_6_1</td>
            <td>2_6_2</td>
            <td>2_6_3</td>
            <td>2_6_4</td>
            <td>2_6_5</td>
            <td>2_6_6</td>
            <td>2_6_7</td>
            <td>2_6_8</td>
            <td>2_6_9</td>
            <td>2_6_10</td>
            <td>2_6_11</td>
            <td>2_6_12</td>
            <td>2_6t</td>


            <td>3_1</td>
            <td>3_2</td>
            <td>3_3</td>
            <td>3_4</td>

            <td>4_1_1</td>
            <td>4_1_2</td>
            <td>4_1_3</td>
            <td>4_2_1</td>
            <td>4_2_2</td>
            <td>4_2_3</td>
            <td>4_3_1</td>
            <td>4_3_2</td>
            <td>4_4_1</td>
            <td>4_4_2</td>
            <td>4_5_1</td>
            <td>4_5_2</td>
            <td>4_5_3</td>
            <td>4_5_4</td>
            <td>4_5_5</td>
            <td>4_6_1</td>
            <td>4_6_2</td>
            <td>4_7_1</td>
            <td>4_7_2</td>
            <td>date_time</td>
            <td>idCode</td>

        </TR>

        <?php
        include '../config/connect.php';

        $se = $con->prepare(" select* from insert_data where cp_code = ? ");
        $se->execute([$_GET["id"]]);

        $n = 1;

        while ($num = $se->fetch(PDO::FETCH_ASSOC)) {

            $id = $num["in_id"];

            echo '
	<TR>

	<td>' . $n . '</td>
    <td>' . $num["cp_name"] . '</td>
	<td>' . $num["cp_code"] . '</td>
	<td>' . $num["cp_sector"] . '</td>


    <td>' . $num["p1_1t"] . '</td>
    <td>' . $num["p1_2"] . '</td>
	<td>' . $num["p1_2_1t"] . '</td>
    <td>' . $num["p1_2_2t"] . '</td>
    <td>' . $num["p1_2t"] . '</td>
	<td>' . $num["p1_3"] . '</td>
   

	<td>' . $num["sex"] . '</td>
	<td>' . $num["age"] . '</td>
	<td>' . $num["p2_3"] . '</td>
    <td>' . $num["p2_3t"] . '</td>
	<td>' . $num["p2_4t"] . '</td>
	
	

	
	<td>' . $num["p2_5_1"] . '</td>
    <td>' . $num["p2_5_2"] . '</td>
	<td>' . $num["p2_5_3"] . '</td>
	<td>' . $num["p2_5_4"] . '</td>
	<td>' . $num["p2_5_5"] . '</td>
	<td>' . $num["p2_5_6"] . '</td>
	

	<td>' . $num["p2_5_7"] . '</td>
	<td>' . $num["p2_5_8"] . '</td>
	<td>' . $num["p2_5_9"] . '</td>
	<td>' . $num["p2_5_10"] . '</td>
	<td>' . $num["p2_5_11"] . '</td>
    <td>' . $num["p2_5t"] . '</td>

    <td>' . $num["p2_6_1"] . '</td>
    <td>' . $num["p2_6_2"] . '</td>
	<td>' . $num["p2_6_3"] . '</td>
	<td>' . $num["p2_6_4"] . '</td>
	<td>' . $num["p2_6_5"] . '</td>
	<td>' . $num["p2_6_6"] . '</td>
	

	<td>' . $num["p2_6_7"] . '</td>
	<td>' . $num["p2_6_8"] . '</td>
	<td>' . $num["p2_6_9"] . '</td>
	<td>' . $num["p2_6_10"] . '</td>
	<td>' . $num["p2_6_11"] . '</td>
    <td>' . $num["p2_6_12"] . '</td>
    <td>' . $num["p2_6t"] . '</td>

    <td>' . $num["p3_1"] . '</td>
    <td>' . $num["p3_2"] . '</td>
    <td>' . $num["p3_3"] . '</td>
    <td>' . $num["p3_4"] . '</td>

     <td>' . $num["p4_1_1"] . '</td>
     <td>' . $num["p4_1_2"] . '</td>
    <td>' . $num["p4_1_3"] . '</td>
    <td>' . $num["p4_2_1"] . '</td>
    <td>' . $num["p4_2_2"] . '</td>
    <td>' . $num["p4_2_3"] . '</td>
    <td>' . $num["p4_3_1"] . '</td>
<td>' . $num["p4_3_2"] . '</td>
<td>' . $num["p4_4_1"] . '</td>
<td>' . $num["p4_4_2"] . '</td>
<td>' . $num["p4_5_1"] . '</td>
<td>' . $num["p4_5_2"] . '</td>
<td>' . $num["p4_5_3"] . '</td>
<td>' . $num["p4_5_4"] . '</td>
<td>' . $num["p4_5_5"] . '</td>
<td>' . $num["p4_6_1"] . '</td>
<td>' . $num["p4_6_2"] . '</td>
<td>' . $num["p4_7_1"] . '</td>
<td>' . $num["p4_7_2"] . '</td>


	

	


	<td>' . $num["date_time"] . '</td>
	<td>' . $num["id_code"] . '</td>

	</TR>

	';
            $n++;
        }

        ?>

    </TABLE>
</BODY>

</HTML>