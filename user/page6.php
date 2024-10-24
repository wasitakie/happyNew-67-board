<?php
session_start();
include '../config/connect.php';
include '../components/layoutHead.php';
?>
<script>
    $(function() {
        $("#slider-range-max").slider({
            range: "max",
            min: 0,
            max: 10,
            value: 0,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount").val(ui.value);
            }
        });
        $("#amount").val($("#slider-range-max").slider("value"));
    });

    $(function() {
        $("#slider-range-max1").slider({
            range: "max",
            min: 0,
            max: 10,
            value: 0,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount1").val(ui.value);
            }
        });
        $("#amount1").val($("#slider-range-max1").slider("value"));
    })

    $(function() {
        $("#slider-range-max2").slider({
            range: "max",
            min: 0,
            max: 10,
            value: 0,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount2").val(ui.value);
            }
        });
        $("#amount2").val($("#slider-range-max2").slider("value"));
    })

    $(function() {
        $("#slider-range-max3").slider({
            range: "max",
            min: 0,
            max: 10,
            value: 0,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount3").val(ui.value);
            }
        });
        $("#amount3").val($("#slider-range-max3").slider("value"));
    })
    $(function() {
        $("#slider-range-max4").slider({
            range: "max",
            min: 0,
            max: 10,
            value: 0,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount4").val(ui.value);
            }
        });
        $("#amount4").val($("#slider-range-max4").slider("value"));
    })
    $(function() {
        $("#slider-range-max5").slider({
            range: "max",
            min: 0,
            max: 10,
            value: 0,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount5").val(ui.value);
            }
        });
        $("#amount5").val($("#slider-range-max5").slider("value"));
    })
    $(function() {
        $("#slider-range-max6").slider({
            range: "max",
            min: 0,
            max: 10,
            value: 0,
            step: 0.1,
            slide: function(event, ui) {
                $("#amount6").val(ui.value);
            }
        });
        $("#amount6").val($("#slider-range-max6").slider("value"));
    })
</script>
<div class="container">
    <div class="col-md-12">
        <div class="logoIndex items-center content-center">
            <img src="../images/Untitled-1.jpg" alt="" srcset="" class="m-auto">
        </div>
        <div class="mb-4 mt-5 thaiFont">

            <div class="head">คำชี้แจงในการตอบแบบสำรวจ</div>
            <div class="head1">ขอให้ท่าน กากบาท X ลงบนเส้นด้านล่าง โดยคะแนนจะเรียงจากน้อยไปหามาก เริ่มจาก 0 หมายถึง
                น้อยที่สุด ไปจนถึง 10 หมายถึง มากที่สุด</div>
            <div class="head2">ส่วนที่ 6: ผลิตภาพ (Productivity) ข้อคำถามจำนวน 7 ข้อ</div>


            <form action="page6Check.php" method="post">

                <div class="box mb-3">
                    <div class="titleQ">40. โดยรวมแล้ว ประสิทธิภาพในการทำงานของท่านนำไปสู่การสร้างผลผลิตที่มีคุณภาพ
                        (Quality) ขององค์กร</div>
                    <div class="questionQ ">
                        <div class="sendQ mb-5">

                            <input type="text" id="amount" readonly="" name="p40"
                                style="border:0; color:#f6931f; font-weight:bold;font-size:20px">
                            <div id="slider-range-max"></div>
                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">41. โดยรวมแล้ว ประสิทธิภาพในการทำงานของท่านนำไปสู่การลดต้นทุน (Cost) ขององค์กร
                    </div>
                    <div class="questionQ ">
                        <div class="sendQ mb-5">

                            <input type="text" id="amount1" readonly="" name="p41"
                                style="border:0; color:#f6931f; font-weight:bold;font-size:20px">
                            <div id="slider-range-max1"></div>
                        </div>
                    </div>
                </div>


                <div class="box mb-3">
                    <div class="titleQ">42. โดยรวมแล้ว
                        ประสิทธิภาพในการทำงานของท่านนำไปสู่การส่งมอบงาน/สินค้าอย่างถูกต้อง
                        ถูกสถานที่ ถูกเวลา (Delivery)</div>
                    <div class="questionQ ">
                        <div class="sendQ mb-5">

                            <input type="text" id="amount2" readonly="" name="p42"
                                style="border:0; color:#f6931f; font-weight:bold;font-size:20px">
                            <div id="slider-range-max2"></div>
                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">43. โดยรวมแล้ว
                        ประสิทธิภาพการทำงานขององค์กรท่านนำไปสู่การมีสภาพแวดล้อมในที่ทำงานปลอดภัยขึ้น (Safety)</div>
                    <div class="questionQ ">
                        <div class="sendQ mb-5">

                            <input type="text" id="amount3" readonly="" name="p43"
                                style="border:0; color:#f6931f; font-weight:bold;font-size:20px">
                            <div id="slider-range-max3"></div>
                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">44. โดยรวมแล้ว
                        ประสิทธิภาพการทำงานขององค์กรท่านนำไปสู่การทำให้พนักงานมีขวัญและกำลังใจที่ดีขึ้น (Moral)</div>
                    <div class="questionQ ">
                        <div class="sendQ mb-5">

                            <input type="text" id="amount4" readonly="" name="p44"
                                style="border:0; color:#f6931f; font-weight:bold;font-size:20px">
                            <div id="slider-range-max4"></div>
                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">45. โดยรวมแล้ว องค์กรของท่านดำเนินธุรกิจโดยไม่กระทบสิ่งแวดล้อมและชุมชน
                        (Environment)
                    </div>
                    <div class="questionQ ">
                        <div class="sendQ mb-5">

                            <input type="text" id="amount5" readonly="" name="p45"
                                style="border:0; color:#f6931f; font-weight:bold;font-size:20px">
                            <div id="slider-range-max5"></div>
                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">46. โดยรวมแล้ว องค์กรของท่านดำเนินธุรกิจโดยไม่เอาเปรียบผู้อื่น (Ethics)</div>
                    <div class="questionQ ">
                        <div class="sendQ mb-5">

                            <input type="text" id="amount6" readonly="" name="p46"
                                style="border:0; color:#f6931f; font-weight:bold;font-size:20px">
                            <div id="slider-range-max6"></div>
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <button type="submit"
                        class="w-full focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 sub">บันทึกข้้อมูล</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="../js/page6.js"></script>
<?php
include '../components/layoutFooter.php';
?>