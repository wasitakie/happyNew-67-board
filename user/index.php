<?php
session_start();
include '../config/connect.php';
include '../components/layoutHead.php';
$se = $con->prepare("SELECT * FROM company WHERE cp_id = ?");
$se->execute([$_GET["id"]]);
$r = $se->fetch(PDO::FETCH_ASSOC);
$_SESSION["idCodeCompany"] = $_GET["id"];
$_SESSION["nameCompany"] = $r["cp_name"];
$_SESSION["codeCompany"] = $r["cp_code"];
$_SESSION["sectorCompany"] = $r["cp_sector"];
$_SESSION["idCode"] = date("YmdHis") . rand(00, 99);

?>
<div class="container">
    <div class="col-md-12">
        <div class="logoIndex items-center content-center">
            <img src="../images/Untitled-1.jpg" alt="" srcset="" class="m-auto">
        </div>
        <div class="text-center mb-4 mt-5">
            <div class=""><span class="text-xl text-bold ">แฮปปีโนมิเตอร์: การสำรวจระดับประเทศ ประจำปี 2567
                    สุขภาวะ ความอยู่ดีมีสุข และการเพิ่มผลิตภาพในการทำงาน <br>
                    ขององค์กรแห่งความสุขในประเทศไทย <br>
                </span></div>
            <br>
            <div class="">HAPPINOMETER: A National Survey 2024
                <br>
                on <br>
                Health & Wellness with Productivity of Happy Workplace in Thailand <br>
                ศูนย์วิจัยความสุขคนทำงานแห่งประเทศไทย
                สถาบันวิจัยประชากรและสังคม มหาวิทยาลัยมหิดล
            </div>
            <div class="company mt-5">
                <div class="font-bold text-2xl">บริษัท</div>

                <div class="mt-2">
                    <?= $r["cp_name"] ?>

                </div>
                <div class="mt-4">
                    <?php
                    if ($r["cp_status"] == 1) {
                        echo '<a href="indexText.php" type="button"
                        class="w-2/5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">เอกสารชี้แจงในการตอบแบบสำรวจ</a>';
                    } else {
                        echo '<button  type="button"
                        class="w-2/5 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">ปิดระบบ</button>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
include '../components/layoutFooter.php';
?>