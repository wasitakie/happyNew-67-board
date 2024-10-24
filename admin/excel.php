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
            <td>p1.2</td>
            <td>p1_3</td>
            <td>p1_3t</td>
            <td>p1_4</td>

            <td>sex</td>
            <td>age</td>
            <td>q2_3</td>
            <td>q2_3t</td>
            <td>q2_4</td>
            <td>q2_5t</td>


            <td>weight</td>
            <td>height</td>
            <td>waist</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <!-- <td>cv1</td> -->

            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <!-- <td>cv2</td> -->

            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <!-- <td>cv3</td> -->

            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <!-- <td>cv4</td> -->

            <td>27</td>
            <td>28</td>
            <td>29</td>
            <!-- <td>cv5</td> -->

            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <!-- <td>cv6</td> -->

            <td>36</td>
            <td>37</td>
            <td>38</td>
            <!-- <td>cv7</td> -->

            <td>39</td>
            <td>40</td>
            <td>41</td>
            <td>42</td>
            <!-- <td>cv8</td> -->

            <td>43</td>
            <td>44</td>
            <td>45</td>
            <td>46</td>





            <td>date_time</td>
            <td>idCode</td>

        </TR>

        <?php
        include '../config/connect.php';

        $se = $con->prepare(" select* from insert_data where data_id = ? ");
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

	<td>' . $num["p1_2"] . '</td>
	<td>' . $num["p1_3"] . '</td>
    	<td>' . $num["p1_3t"] . '</td>
	<td>' . $num["p1_4"] . '</td>
	

	<td>' . $num["sex"] . '</td>
	<td>' . $num["age"] . '</td>
	<td>' . $num["p2_3"] . '</td>
    <td>' . $num["p2_3t"] . '</td>
	<td>' . $num["p2_4"] . '</td>
	<td>' . $num["p2_5t"] . '</td>
	
	

	<td>' . $num["weight"] . '</td>
	<td>' . $num["height"] . '</td>
	<td>' . $num["waist"] . '</td>
	<td>' . $num["p2"] . '</td>
	<td>' . $num["p3"] . '</td>
	<td>' . $num["p4"] . '</td>
	<td>' . $num["p5"] . '</td>
	<td>' . $num["p6"] . '</td>
	

	<td>' . $num["p7"] . '</td>
	<td>' . $num["p8"] . '</td>
	<td>' . $num["p9"] . '</td>
	<td>' . $num["p10"] . '</td>
	<td>' . $num["p11"] . '</td>

	<td>' . $num["p12"] . '</td>
	<td>' . $num["p13"] . '</td>
	<td>' . $num["p14"] . '</td>
	<td>' . $num["p15"] . '</td>
	<td>' . $num["p16"] . '</td>

	<td>' . $num["p17"] . '</td>
	<td>' . $num["p18"] . '</td>
	<td>' . $num["p19"] . '</td>
	<td>' . $num["p20"] . '</td>
	<td>' . $num["p21"] . '</td>

	<td>' . $num["p22"] . '</td>
	<td>' . $num["p23"] . '</td>
	<td>' . $num["p24"] . '</td>

	<td>' . $num["p25"] . '</td>
	<td>' . $num["p26"] . '</td>
	<td>' . $num["p27"] . '</td>
	<td>' . $num["p28"] . '</td>
	<td>' . $num["p29"] . '</td>
	<td>' . $num["p30"] . '</td>

	<td>' . $num["p31"] . '</td>
	<td>' . $num["p32"] . '</td>
	<td>' . $num["p33"] . '</td>

	<td>' . $num["p34"] . '</td>
	<td>' . $num["p35"] . '</td>
	<td>' . $num["p36"] . '</td>
	<td>' . $num["p37"] . '</td>

	<td>' . $num["p38"] . '</td>
	<td>' . $num["p39"] . '</td>
	<td>' . $num["p40"] . '</td>
	<td>' . $num["p41"] . '</td>
	<td>' . $num["p42"] . '</td>
	<td>' . $num["p43"] . '</td>
	<td>' . $num["p44"] . '</td>
	<td>' . $num["p45"] . '</td>
	<td>' . $num["p46"] . '</td>
	

	


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