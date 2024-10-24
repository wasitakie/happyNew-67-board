<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
session_start();
include '../config/connect.php';
include '../components/layoutHead.php';
$page2 = $_SESSION["page2"];
$page3 = $_SESSION["page3"];
$sex = $page2[1];
$weight = $page3[1];
$height = $page3[2] / 100;
$height2 = $height * $height;
$waist = $page3[3] / 0.39370;

$wt = $waist;


$bmi = $weight / $height2;
if ($bmi >= 0 and $bmi <= 18.4) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักน้อย | <strong>ภาวะเสี่ยงต่อโรค : </strong>ต่ำ";
} elseif ($bmi >= 18.5 and $bmi <= 22.9) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักปกติ | <strong>ภาวะเสี่ยงต่อโรค : </strong>เท่าคนปกติ";
} elseif ($bmi >= 23.0 and $bmi <= 24.9) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักเกิน | <strong>ภาวะเสี่ยงต่อโรค : </strong>มากกว่าปกติ";
} elseif ($bmi >= 25.0 and $bmi <= 29.9) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>โรคอ้วน | <strong>ภาวะเสี่ยงต่อโรค : </strong>สูง";
} elseif ($bmi >= 30.0) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>อ้วนมาก | <strong>ภาวะเสี่ยงต่อโรค : </strong>อยู่ในช่วงอันตราย";
}

if ($sex == 1) {
    $sexTh = "ชาย";

    if ($bmi >= 90) {
        $wt = "ท่านอยู่ในภาวะลงพุง";
    } else {
        $wt = "ท่านไม่อยู่ในภาวะลงพุง";
    }
} elseif ($sex == 2) {
    $sexTh = "หญิง";

    if ($bmi >= 80) {
        $wt = "ท่านอยู่ในภาวะลงพุง";
    } else {
        $wt = "ท่านไม่อยู่ในภาวะลงพุง";
    }
} elseif ($sex == 3) {
    $sexTh = "เพศทางเลือก";

    if ($bmi >= 90) {
        $wt_sex1 = "ท่านอยู่ในภาวะลงพุง(ชาย)";
    } else {
        $wt_sex1 = "ท่านไม่อยู่ในภาวะลงพุง(ชาย)";
    }

    if ($bmi >= 90) {
        $wt_sex2 = "ท่านอยู่ในภาวะลงพุง(หญิง)";
    } else {
        $wt_sex2 = "ท่านไม่อยู่ในภาวะลงพุง(หญิง)";
    }
}

$nm10 = ($_SESSION["happyBody"] + $_SESSION["happyRelax"] + $_SESSION["happyHeart"] + $_SESSION["happySoul"] + $_SESSION["happyFamily"] + $_SESSION["happySociety"] + $_SESSION["happyBrain"] + $_SESSION["happyMoney"] + $_SESSION["happyWorkLife"]) / 9;

if ($_SESSION["happyBody"] <= '24.99') {
    $img_nm1 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($_SESSION["happyBody"] >= '25.00' and $_SESSION["happyBody"] <= '49.99') {
    $img_nm1 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happyBody"] >= '50.00' and $_SESSION["happyBody"] <= '74.99') {
    $img_nm1 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happyBody"] >= '75.00' and $_SESSION["happyBody"] <= '100.00') {
    $img_nm1 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($_SESSION["happyRelax"] <= '24.99') {
    $img_nm2 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($_SESSION["happyRelax"] >= '25.00' and $_SESSION["happyRelax"] <= '49.99') {
    $img_nm2 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happyRelax"] >= '50.00' and $_SESSION["happyRelax"] <= '74.99') {
    $img_nm2 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happyRelax"] >= '75.00' and $_SESSION["happyRelax"] <= '100.00') {
    $img_nm2 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($_SESSION["happyHeart"] <= '24.99') {
    $img_nm3 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($_SESSION["happyHeart"] >= '25.00' and $_SESSION["happyHeart"] <= '49.99') {
    $img_nm3 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happyHeart"] >= '50.00' and $_SESSION["happyHeart"] <= '74.99') {
    $img_nm3 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happyHeart"] >= '75.00' and $_SESSION["happyHeart"] <= '100.00') {
    $img_nm3 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($_SESSION["happySoul"] <= '24.99') {
    $img_nm4 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($_SESSION["happySoul"] >= '25.00' and $_SESSION["happySoul"] <= '49.99') {
    $img_nm4 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happySoul"] >= '50.00' and $_SESSION["happySoul"] <= '74.99') {
    $img_nm4 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happySoul"] >= '75.00' and $_SESSION["happySoul"] <= '100.00') {
    $img_nm4 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($_SESSION["happyFamily"] <= '24.99') {
    $img_nm5 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($_SESSION["happyFamily"] >= '25.00' and $_SESSION["happyFamily"] <= '49.99') {
    $img_nm5 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happyFamily"] >= '50.00' and $_SESSION["happyFamily"] <= '74.99') {
    $img_nm5 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happyFamily"] >= '75.00' and $_SESSION["happyFamily"] <= '100.00') {
    $img_nm5 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($_SESSION["happySociety"] <= '24.99') {
    $img_nm6 = '<img src="../images/v.png" class="images" >' . '<br>Very Unhappy';
} elseif ($_SESSION["happySociety"] >= '25.00' and $_SESSION["happySociety"] <= '49.99') {
    $img_nm6 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happySociety"] >= '50.00' and $_SESSION["happySociety"] <= '74.99') {
    $img_nm6 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happySociety"] >= '75.00' and $_SESSION["happySociety"] <= '100.00') {
    $img_nm6 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($_SESSION["happyBrain"] <= '24.99') {
    $img_nm7 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($_SESSION["happyBrain"] >= '25.00' and $_SESSION["happyBrain"] <= '49.99') {
    $img_nm7 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happyBrain"] >= '50.00' and $_SESSION["happyBrain"] <= '74.99') {
    $img_nm7 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happyBrain"] >= '75.00' and $_SESSION["happyBrain"] <= '100.00') {
    $img_nm7 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($_SESSION["happyMoney"] <= '24.99') {
    $img_nm8 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($_SESSION["happyMoney"] >= '25.00' and $_SESSION["happyMoney"] <= '49.99') {
    $img_nm8 = '<img src="../images/u.png"class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happyMoney"] >= '50.00' and $_SESSION["happyMoney"] <= '74.99') {
    $img_nm8 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happyMoney"] >= '75.00' and $_SESSION["happyMoney"] <= '100.00') {
    $img_nm8 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($_SESSION["happyWorkLife"] <= '24.99') {
    $img_nm9 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($_SESSION["happyWorkLife"] >= '25.00' and $_SESSION["happyWorkLife"] <= '49.99') {
    $img_nm9 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($_SESSION["happyWorkLife"] >= '50.00' and $_SESSION["happyWorkLife"] <= '74.99') {
    $img_nm9 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($_SESSION["happyWorkLife"] >= '75.00' and $_SESSION["happyWorkLife"] <= '100.00') {
    $img_nm9 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}

if ($nm10 <= '24.99') {
    $img_nm10 = '<img src="../images/v.png" class="images">' . '<br>Very Unhappy';
} elseif ($nm10 >= '25.00' and $nm10 <= '49.99') {
    $img_nm10 = '<img src="../images/u.png" class="images">' . '<br>Unhappy';
} elseif ($nm10 >= '50.00' and $nm10 <= '74.99') {
    $img_nm10 = '<img src="../images/h.png" class="images">' . '<br>Happy';
} elseif ($nm10 >= '75.00' and $nm10 <= '100.00') {
    $img_nm10 = '<img src="../images/h.png" class="images">' . '<br>Very Happy';
}




?>
<div class="container">
    <div class="col-md-12">
        <div class="logoIndex items-center content-center">
            <img src="../images/Untitled-1.jpg" alt="" srcset="" class="m-auto">
        </div>
        <div class="mb-4 mt-5 thaiFont">
            <div class="text-center text-xl">สรุปผลการสำรวจแฮปปีโนมิเตอร์:
                <br>สุขภาวะและความอยู่ดีมีสุขร่วมกับการเพิ่มผลิตภาพในการทำงานขององค์กรแห่งความสุขในประเทศไทย
            </div>
            <div class="mt-5">ค่า BMI ของท่านคือ : <?= number_format($bmi, 2) ?> : <?= $bmi_text ?><br>
                เพศที่ท่านระบุ : <?= $sexTh ?> ภาวะอ้วนลงพุงของท่าน : <?= $wt ?></div>

            <div class="mt-5">
                <div class="mb-5">
                    <h5>กราฟใยแมงมุมแสดงค่าเฉลี่ยความสุขรายมิติ</h5>
                </div>
                <div style="margin-top: 20px;width:50%;margin:auto"><canvas id="myChart" class="rada"></canvas>
                </div>


                <div class="mt-5">
                    <h5>กราฟแท่งแสดงค่าเฉลี่ยความสุขรายมิติ</h5>
                </div>
                <div style="margin-top: 20px; width: 90%; text-align: center;"><canvas id="myChart1"
                        class="radaBox"></canvas></div>


                <div class="my-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-primary text-center" role="alert">
                                <strong>ความผูกพัน ( Engagement)</strong>
                                <h1><?= number_format($_SESSION["engagement"], 2) ?></h1>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-info text-center" role="alert">
                                <strong>สมดุลระหว่างชีวิตและการทำงาน (Work-life Balance)</strong>
                                <h1><?= number_format($_SESSION["WorkLifeBalance"], 2) ?></h1>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="">

                    <div class="table-responsive logoPic">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col"><img src="../images/logo1.png" alt=""></th>
                                    <th scope="col"><img src="../images/logo3.png" alt=""></th>
                                    <th scope="col"><img src="../images/logo2.png" alt=""></th>
                                    <th scope="col"><img src="../images/logo5.png" alt=""></th>
                                    <th scope="col"><img src="../images/logo7.png" alt=""></th>
                                    <th scope="col"><img src="../images/logo8.png" alt=""></th>
                                    <th scope="col"><img src="../images/logo4.png" alt=""></th>
                                    <th scope="col"><img src="../images/logo6.png" alt=""></th>
                                    <th scope="col"><img src="../images/logo9.png" alt=""></th>
                                    <th scope="col" class="text-center">ความสุขภาพรวม</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <td>สุขภาพดี</td>
                                    <td>ผ่อนคลายดี</td>
                                    <td>น้ำใจดี</td>
                                    <td>จิตวิญญาณดี</td>
                                    <td>ครอบครัวดี</td>
                                    <td>สังคมดี</td>
                                    <td>ใฝ่รู้ดี</td>
                                    <td>สุขภาพเงินดี</td>
                                    <td>การงานดี</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?= number_format($_SESSION["happyBody"], 2) ?></td>
                                    <td><?= number_format($_SESSION["happyRelax"], 2) ?></td>
                                    <td><?= number_format($_SESSION["happyHeart"], 2) ?></td>
                                    <td><?= number_format($_SESSION["happySoul"], 2) ?></td>
                                    <td><?= number_format($_SESSION["happyFamily"], 2) ?></td>
                                    <td><?= number_format($_SESSION["happySociety"], 2) ?></td>
                                    <td><?= number_format($_SESSION["happyBrain"], 2) ?></td>
                                    <td><?= number_format($_SESSION["happyMoney"], 2) ?></td>
                                    <td><?= number_format($_SESSION["happyWorkLife"], 2) ?></td>
                                    <td><?= number_format($nm10, 2) ?></td>
                                </tr>
                                <tr class="textHappy">
                                    <td><?= $img_nm1; ?></td>
                                    <td><?= $img_nm2; ?></td>
                                    <td><?= $img_nm3; ?></td>
                                    <td><?= $img_nm4; ?></td>
                                    <td><?= $img_nm5; ?></td>
                                    <td><?= $img_nm6; ?></td>
                                    <td><?= $img_nm7; ?></td>
                                    <td><?= $img_nm8; ?></td>
                                    <td><?= $img_nm9 ?></td>
                                    <td><?= $img_nm10; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    new Chart(document.getElementById("myChart"), {
        "type": "radar",
        "data": {
            "labels": ['สุขภาพดี', 'ผ่อนคลายดี', 'น้ำใจดี', 'จิตวิญญาณดี', 'ครอบครัวดี', 'สังคมดี',
                'ใฝ่รู้ดี', 'สุขภาพเงินดี', 'การงานดี'
            ],
            "datasets": [{
                    "label": "แสดงค่าเฉลี่ยความสุขรายมิติ",

                    "data": [<?= $_SESSION["happyBody"] ?>, <?= $_SESSION["happyRelax"] ?>,
                        <?= $_SESSION["happyHeart"] ?>, <?= $_SESSION["happySoul"] ?>,
                        <?= $_SESSION["happyFamily"] ?>,
                        <?= $_SESSION["happySociety"] ?>, <?= $_SESSION["happyBrain"] ?>,
                        <?= $_SESSION["happyMoney"] ?>, <?= $_SESSION["happyWorkLife"] ?>
                    ],
                    "fill": true,
                    "backgroundColor": "rgba(255, 99, 132, 0.2)",
                    "borderColor": "rgb(255, 99, 132)",
                    "pointBackgroundColor": "rgb(255, 99, 132)",
                    "pointBorderColor": "#fff",
                    "pointHoverBackgroundColor": "#fff",
                    "pointHoverBorderColor": "rgb(255, 99, 132)"
                },
                {

                    "data": [0],
                }
            ]
        },
        "options": {
            "elements": {
                "line": {
                    "tension": 0,
                    "borderWidth": 3
                }
            }
        }
    });
</script>

<script>
    new Chart(document.getElementById("myChart1"), {
        "type": "bar",
        "data": {
            "labels": ['สุขภาพดี', 'ผ่อนคลายดี', 'น้ำใจดี', 'จิตวิญญาณดี', 'ครอบครัวดี', 'สังคมดี',
                'ใฝ่รู้ดี', 'สุขภาพเงินดี', 'การงานดี'
            ],
            "datasets": [{
                "label": "แสดงค่าเฉลี่ยความสุขรายมิติ",
                "data": [<?= $_SESSION["happyBody"] ?>, <?= $_SESSION["happyRelax"] ?>,
                    <?= $_SESSION["happyHeart"] ?>, <?= $_SESSION["happySoul"] ?>,
                    <?= $_SESSION["happyFamily"] ?>,
                    <?= $_SESSION["happySociety"] ?>, <?= $_SESSION["happyBrain"] ?>,
                    <?= $_SESSION["happyMoney"] ?>, <?= $_SESSION["happyWorkLife"] ?>
                ],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                    "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)",
                    "rgba(201, 203, 207, 0.2)", "rgba(1, 244, 219, 0.2)", "rgba(1, 1, 244, 0.2)"
                ],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                    "rgb(201, 203, 207)", "rgba(1, 244, 219)", "rgba(1, 1, 244)"
                ],
                "borderWidth": 1
            }]
        },
        "options": {
            "scales": {
                "yAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            }
        }
    });
</script>


<?php
include '../components/layoutFooter.php';
?>