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
</script>
<div class="container">
    <div class="col-md-12">
        <div class="logoIndex items-center content-center">
            <img src="../images/Untitled-1.jpg" alt="" srcset="" class="m-auto">
        </div>
        <div class="mb-4 mt-5 thaiFont">

            <div class="head">คำชี้แจงในการตอบแบบสำรวจ</div>
            <div class="head1">ให้ใส่เครื่องหมาย <i class="fa-solid fa-check"></i> ในช่อง <i
                    class="fa-regular fa-square-full"></i> ทุกข้อที่ท่านเลือก </div>
            <div class="head2">ส่วนที่ 3: สุขภาวะและความอยู่ดีมีสุข (Health & Wellness) ข้อคำถามจำนวน 26 ข้อ</div>


            <form action="page3Check.php" method="post">
                <div class="box mb-3">
                    <div class="grid md:grid-cols-3 md:gap-6">

                        <div class="titleQ">1. ปัจจุบัน ท่านมีน้ำหนัก
                            <input type="text" id="default-input" name="weight"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 weight">

                        </div>
                        <div class="titleQ">ส่วนสูง
                            <input type="text" id="default-input" name="height"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 height">

                        </div>
                        <div class="titleQ">เส้นรอบเอว
                            <input type="text" id="default-input" name="waist"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 waist">

                        </div>
                    </div>
                    <div class="questionQ">
                        <div class="sendQ"><img src="../images/bmi.jpg" class="w-2/5"></div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">2. ในชีวิตประจำวันทุกวันนี้ ท่านกินอาหารที่มีรสหวานจัด เช่นลูกอม/ทอฟฟี่
                        ช็อกโกแลต
                        ขนมหวานต่าง ๆ เครื่องดื่มที่มีรสหวาน น้ำอัดลม ฯลฯ โดยเฉลี่ยสัปดาห์ละกี่วัน </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p2-1" type="radio" value="1" name="p2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2">
                                <label for="p2-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    กินทุกวัน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p2-2" type="radio" value="2" name="p2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2">
                                <label for="p2-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    กินเป็นประจำ (5-6 วัน)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p2-3" type="radio" value="3" name="p2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2">
                                <label for="p2-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    กินเป็นบางครั้ง (3-4 วัน)</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p2-4" type="radio" value="4" name="p2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2">
                                <label for="P2-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    กินแต่ไม่บ่อย (1-2 วัน)
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p2-5" type="radio" value="5" name="p2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2">
                                <label for="p2-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่กิน
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">3. ในชีวิตประจำวันทุกวันนี้ ท่านกินอาหารที่มีรสเค็มจัด เช่น อาหารที่เพิ่มน้ำปลา
                        หรือซอสปรุงรสต่างๆ อาหารกระป๋อง ขนมขบเคี้ยว อาหารกึ่งสำเร็จรูป อาหารตากแห้งหมักดอง อาหารรสจัด
                        โดยเฉลี่ยสัปดาห์ละกี่วัน </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p3-1" type="radio" value="1" name="p3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3">
                                <label for="p3-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    กินทุกวัน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-2" type="radio" value="2" name="p3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3">
                                <label for="p3-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    กินเป็นประจำ (5-6 วัน)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-3" type="radio" value="3" name="p3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3">
                                <label for="p3-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    กินเป็นบางครั้ง (3-4 วัน)</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-4" type="radio" value="4" name="p3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3">
                                <label for="p3-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    กินแต่ไม่บ่อย (1-2 วัน)
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-5" type="radio" value="5" name="p3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3">
                                <label for="p3-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่กิน
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">4. ในชีวิตประจำวันทุกวันนี้ ท่านกินอาหารที่มันจัด/ของมัน เช่น ของทอด หมูกระทะ
                        อาหารที่มีส่วนผสมของชีส/เนย ฟาสต์ฟู้ดฯ โดยเฉลี่ยสัปดาห์ละกี่วัน </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p4-1" type="radio" value="1" name="p4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p4">
                                <label for="p4-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    กินทุกวัน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p4-2" type="radio" value="2" name="p4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p4">
                                <label for="p4-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    กินเป็นประจำ (5-6 วัน)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p4-3" type="radio" value="3" name="p4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p4">
                                <label for="p4-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    กินเป็นบางครั้ง (3-4 วัน)</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p4-4" type="radio" value="4" name="p4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p4">
                                <label for="p4-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    กินแต่ไม่บ่อย (1-2 วัน)
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p4-5" type="radio" value="5" name="p4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p4">
                                <label for="p4-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่กิน
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">5. ในชีวิตประจำวันทุกวันนี้ ท่านกินผัก และ/หรือ ผลไม้ โดยเฉลี่ยสัปดาห์ละกี่วัน
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p5-1" type="radio" value="1" name="p5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p5">
                                <label for="p5-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่กิน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p5-2" type="radio" value="2" name="p5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p5">
                                <label for="p5-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    กินแต่ไม่บ่อย (1-2 วัน)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p5-3" type="radio" value="3" name="p5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p5">
                                <label for="p5-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    กินเป็นบางครั้ง (3-4 วัน)</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p5-4" type="radio" value="4" name="p5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p5">
                                <label for="p5-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    กินเป็นประจำ (5-6 วัน)
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p5-5" type="radio" value="5" name="p5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p5">
                                <label for="p5-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    กินทุกวัน
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="box mb-3">
                    <div class="titleQ">6. ในชีวิตประจำวันทุกวันนี้ ท่านออกกำลังกาย โดยเฉลี่ยสัปดาห์ละกี่วัน</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p6-1" type="radio" value="1" name="p6"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p6">
                                <label for="p6-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่ได้ออกกำลังกายเลย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p6-2" type="radio" value="2" name="p6"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p6">
                                <label for="p6-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    ออกกำลังกายน้อยกว่า 3 วัน/สัปดาห์</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p6-3" type="radio" value="3" name="p6"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p6">
                                <label for="p6-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ออกกำลังกาย 3 วัน/สัปดาห์</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p6-4" type="radio" value="4" name="p6"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p6">
                                <label for="p6-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ออกกำลังกายมากกว่า 3 วัน/สัปดาห์
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p6-5" type="radio" value="5" name="p6"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p6">
                                <label for="p6-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ออกกำลังกายทุกวัน
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="box mb-3">
                    <div class="titleQ">7. ในชีวิตประจำวันทุกวันนี้ ท่านสูบบุหรี่/ ยาเส้น หรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p7-1" type="radio" value="1" name="p7"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p7">
                                <label for="p7-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    สูบเป็นประจำ</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p7-2" type="radio" value="2" name="p7"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p7">
                                <label for="p7-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    สูบบ่อยครั้ง</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p7-3" type="radio" value="3" name="p7"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p7">
                                <label for="p7-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    สูบนาน ๆ ครั้ง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p7-4" type="radio" value="4" name="p7"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p7">
                                <label for="p7-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ไม่สูบแต่เคยสูบ
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p7-5" type="radio" value="5" name="p7"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p7">
                                <label for="p7-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่เคยสูบเลย
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">8. ในชีวิตประจำวันทุกวันนี้ ท่านสูบบุหรี่ไฟฟ้า หรือไม่ </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p8-1" type="radio" value="1" name="p8"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p8">
                                <label for="p8-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    สูบเป็นประจำ</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p8-2" type="radio" value="2" name="p8"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p8">
                                <label for="p8-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    สูบบ่อยครั้ง</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p8-3" type="radio" value="3" name="p8"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p8">
                                <label for="p8-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    สูบนาน ๆ ครั้ง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p8-4" type="radio" value="4" name="p8"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p8">
                                <label for="p8-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ไม่สูบแต่เคยสูบ
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p8-5" type="radio" value="5" name="p8"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p8">
                                <label for="p8-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่เคยสูบเลย
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="box mb-3">
                    <div class="titleQ">9. ในชีวิตประจำวันทุกวันนี้ ท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์ เช่น เหล้า เบียร์
                        ไวน์
                        สาโท หรือสุราพื้นบ้านหรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p9-1" type="radio" value="1" name="p9"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p9">
                                <label for="p9-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ดื่มทุกวัน </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p9-2" type="radio" value="2" name="p9"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p9">
                                <label for="p9-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    เกือบทุกสัปดาห์</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p9-3" type="radio" value="3" name="p9"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p9">
                                <label for="p9-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ดื่มเกือบทุกเดือน</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p9-4" type="radio" value="4" name="p9"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p9">
                                <label for="p9-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ไม่ดื่มแต่เคยดื่ม/ นาน ๆ ครั้ง
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p9-5" type="radio" value="5" name="p9"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p9">
                                <label for="p9-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่เคยดื่มเลย
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">10. ในชีวิตประจำวันทุกวันนี้ ท่านมีความเครียด (จากการทำงาน/ ครอบครัว/ เรื่องอื่น
                        ๆ)
                        บ้างหรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p10-1" type="radio" value="1" name="p10"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p10">
                                <label for="p10-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    เครียดมากที่สุด</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p10-2" type="radio" value="2" name="p10"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p10">
                                <label for="p10-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    เครียดมาก</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p10-3" type="radio" value="3" name="p10"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p10">
                                <label for="p10-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    เครียดปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p10-4" type="radio" value="4" name="p10"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p10">
                                <label for="p10-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    เครียดน้อย
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p10-5" type="radio" value="5" name="p10"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p10">
                                <label for="p10-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่เครียดเลย
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="box mb-3">
                    <div class="titleQ">11. โดยรวมแล้วท่านรู้สึกว่าได้รับการพักผ่อนเพียงพอหรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p11-1" type="radio" value="1" name="p11"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p11">
                                <label for="p11-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่พอ/ น้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p11-2" type="radio" value="2" name="p11"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p11">
                                <label for="p11-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p11-3" type="radio" value="3" name="p11"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p11">
                                <label for="p11-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p11-4" type="radio" value="4" name="p11"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p11">
                                <label for="p11-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p11-5" type="radio" value="5" name="p11"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p11">
                                <label for="p11-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">12. โดยรวมแล้วท่านให้การช่วยเหลือแก่คนรอบข้างเพียงใด</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p12-1" type="radio" value="1" name="p12"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p12">
                                <label for="p12-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่เคย/ แทบจะไม่เคยช่วย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p12-2" type="radio" value="2" name="p12"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p12">
                                <label for="p12-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    นานๆ ครั้ง</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p12-3" type="radio" value="3" name="p12"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p12">
                                <label for="p12-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ช่วยบ้างบางครั้ง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p12-4" type="radio" value="4" name="p12"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p12">
                                <label for="p12-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ช่วยแทบทุกครั้ง
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p12-5" type="radio" value="5" name="p12"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p12">
                                <label for="p12-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ช่วยทุกครั้ง
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">13. โดยรวมแล้ว ท่านยกโทษและให้อภัยอย่างจริงใจต่อผู้ที่สำนึกผิด</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p13-1" type="radio" value="1" name="p13"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p13">
                                <label for="p13-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่ยกโทษ/ ให้อภัยน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p13-2" type="radio" value="2" name="p13"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p13">
                                <label for="p13-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p13-3" type="radio" value="3" name="p13"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p13">
                                <label for="p13-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p13-4" type="radio" value="4" name="p13"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p13">
                                <label for="p13-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p13-5" type="radio" value="5" name="p13"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p13">
                                <label for="p13-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">14. ในชีวิตประจำวันทุกวันนี้ ท่านมีความสุขกับครอบครัวของท่านหรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p14-1" type="radio" value="1" name="p14"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p14">
                                <label for="p14-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่มี/ มีน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p14-2" type="radio" value="2" name="p14"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p14">
                                <label for="p14-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p14-3" type="radio" value="3" name="p14"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p14">
                                <label for="p14-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p14-4" type="radio" value="4" name="p14"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p14">
                                <label for="p14-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p14-5" type="radio" value="5" name="p14"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p14">
                                <label for="p14-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">15. ในชีวิตประจำวันทุกวันนี้ ท่านมีความรู้สึกปลอดภัยในชีวิตและทรัพย์สินเพียงใด
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p15-1" type="radio" value="1" name="p15"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p15">
                                <label for="p15-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่รู้สึก/ รู้สึกน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p15-2" type="radio" value="2" name="p15"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p15">
                                <label for="p15-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p15-3" type="radio" value="3" name="p15"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p15">
                                <label for="p15-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p15-4" type="radio" value="4" name="p15"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p15">
                                <label for="p15-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p15-5" type="radio" value="5" name="p15"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p15">
                                <label for="p15-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">16. ในชีวิตประจำวันทุกวันนี้
                        ท่านได้รับมลพิษจากสิ่งแวดล้อมรอบตัวท่านในการใช้ชีวิตประจำวัน (เช่น ฝุ่น ควัน กลิ่น เสียง อากาศ
                        ฯลฯ)
                        เพียงใด</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p16-1" type="radio" value="1" name="p16"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p16">
                                <label for="p16-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ได้รับมากที่สุด</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p16-2" type="radio" value="2" name="p16"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p16">
                                <label for="p16-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    ได้รับมาก </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p16-3" type="radio" value="3" name="p16"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p16">
                                <label for="p16-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ได้รับปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p16-4" type="radio" value="4" name="p16"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p16">
                                <label for="p16-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ได้รับน้อย
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p16-5" type="radio" value="5" name="p16"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p16">
                                <label for="p16-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่ได้รับ
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">17. ในชีวิตประจำวันทุกวันนี้ ท่านแสวงหาความรู้ใหม่/ เทคโนโลยีใหม่ ๆ
                        เพิ่มเติมจากแหล่งความรู้เดิมในระดับใด</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p17-1" type="radio" value="1" name="p17"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p17">
                                <label for="p17-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่ทำ/ ไม่แสวงหา</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p17-2" type="radio" value="2" name="p17"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p17">
                                <label for="p17-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    ทำ/ แสวงหาน้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p17-3" type="radio" value="3" name="p17"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p17">
                                <label for="p17-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ทำ/ แสวงหาปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p17-4" type="radio" value="4" name="p17"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p17">
                                <label for="p17-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ทำ/ แสวงหาบ่อยครั้ง
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p17-5" type="radio" value="5" name="p17"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p17">
                                <label for="p17-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ทำ/ แสวงหาเป็นประจำ
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">18. ท่านรู้สึกว่า การผ่อนชำระหนี้สินต่าง ๆ โดยรวมของท่านในปัจจุบันเป็นภาระ
                        หรือไม่
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p18-1" type="radio" value="1" name="p18"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p18">
                                <label for="p18-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    เป็นภาระหนักที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p18-2" type="radio" value="2" name="p18"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p18">
                                <label for="p18-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    เป็นภาระหนักมาก</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p18-3" type="radio" value="3" name="p18"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p18">
                                <label for="p18-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    เป็นภาระปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p18-4" type="radio" value="4" name="p18"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p18">
                                <label for="p18-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    เป็นภาระน้อย
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p18-5" type="radio" value="5" name="p18"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p18">
                                <label for="p18-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่เป็นภาระ/ ไม่ได้ผ่อนชำระ/ ไม่มีหนี้สิน
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">19. โดยรวมแล้ว ท่านมีการออม (เงินเก็บ/ บัญชีเงินฝาก/ การลงทุนต่าง ๆ)
                        ในแต่ละเดือนหรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p19-1" type="radio" value="1" name="p19"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p19">
                                <label for="p19-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่มี/มีน้อยที่สุด</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p19-2" type="radio" value="2" name="p19"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p19">
                                <label for="p19-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    มีเพียงเล็กน้อย </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p19-3" type="radio" value="3" name="p19"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p19">
                                <label for="p19-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    มีปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p19-4" type="radio" value="4" name="p19"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p19">
                                <label for="p19-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มีมาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p19-5" type="radio" value="5" name="p19"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p19">
                                <label for="p19-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มีมากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">20. ในชีวิตประจำวันทุกวันนี้ ท่านเล่นหวย ลอตเตอรี่ พนัน เสี่ยงโชค หรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p20-1" type="radio" value="1" name="p20"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p20">
                                <label for="p20-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    มากที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p20-2" type="radio" value="2" name="p20"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p20">
                                <label for="p20-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    มาก</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p20-3" type="radio" value="3" name="p20"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p20">
                                <label for="p20-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p20-4" type="radio" value="4" name="p20"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p20">
                                <label for="p20-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    น้อย
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p20-5" type="radio" value="5" name="p20"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p20">
                                <label for="p20-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่เคยเล่นเลย
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="box mb-3">
                    <div class="titleQ">21. งานของท่าน มีความชัดเจนของโอกาสในการเติบโตในตำแหน่งหน้าที่หรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p21-1" type="radio" value="1" name="p21"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p21">
                                <label for="p21-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่มี/ มีน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p21-2" type="radio" value="2" name="p21"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p21">
                                <label for="p21-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p21-3" type="radio" value="3" name="p21"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p21">
                                <label for="p21-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p21-4" type="radio" value="4" name="p21"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p21">
                                <label for="p21-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p21-5" type="radio" value="5" name="p21"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p21">
                                <label for="p21-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">22. ในการทำงาน ท่านสามารถแสดงความคิดเห็นและมีส่วนร่วมในข้อเสนอแนะกับนายจ้าง
                        หรือหัวหน้างานหรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p22-1" type="radio" value="1" name="p22"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p22">
                                <label for="p22-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่มีส่วนร่วม/ มีน้อยที่สุด</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p22-2" type="radio" value="2" name="p22"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p22">
                                <label for="p22-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    มีส่วนร่วมบ้างเล็กน้อย </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p22-3" type="radio" value="3" name="p22"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p22">
                                <label for="p22-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    มีส่วนร่วมปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p22-4" type="radio" value="4" name="p22"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p22">
                                <label for="p22-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มีส่วนร่วมมาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p22-5" type="radio" value="5" name="p22"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p22">
                                <label for="p22-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มีส่วนร่วมมากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">23. ค่าตอบแทนที่ท่านได้รับคุ้มค่ากับความเสี่ยงที่อาจเกิดจากการทำงาน
                        (การถูกฟ้องร้อง/
                        การได้รับอันตรายจากการทำงาน ฯลฯ) หรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p23-1" type="radio" value="1" name="p23"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p23">
                                <label for="p23-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่คุ้มค่า/ คุ้มค่าน้อยที่สุด</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p23-2" type="radio" value="2" name="p23"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p23">
                                <label for="p23-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    คุ้มค่าน้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p23-3" type="radio" value="3" name="p23"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p23">
                                <label for="p23-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    คุ้มค่าปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p23-4" type="radio" value="4" name="p23"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p23">
                                <label for="p23-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    คุ้มค่ามาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p23-5" type="radio" value="5" name="p23"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p23">
                                <label for="p23-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    คุ้มค่ามากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">24. ท่านได้รับการดูแลเกี่ยวกับสุขภาพที่ดีจากองค์กร หรือไม่ </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p24-1" type="radio" value="1" name="p24"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p24">
                                <label for="p24-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่ได้รับ/ ได้รับน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p24-2" type="radio" value="2" name="p24"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p24">
                                <label for="p24-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p24-3" type="radio" value="3" name="p24"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p24">
                                <label for="p24-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p24-4" type="radio" value="4" name="p24"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p24">
                                <label for="p24-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p24-5" type="radio" value="5" name="p24"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p24">
                                <label for="p24-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="box mb-3">
                    <div class="titleQ">25. โดยรวมแล้วที่ทำงานของท่านให้ความสำคัญกับการทำงานเป็นทีมหรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p25-1" type="radio" value="1" name="p25"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p25">
                                <label for="p25-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่ให้/ ให้น้อยที่สุด</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p25-2" type="radio" value="2" name="p25"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p25">
                                <label for="p25-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p25-3" type="radio" value="3" name="p25"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p25">
                                <label for="p25-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p25-4" type="radio" value="4" name="p25"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p25">
                                <label for="p25-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p25-5" type="radio" value="5" name="p25"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p25">
                                <label for="p25-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">26. จากระดับ 0 – 10 ท่านมี สุขภาวะและความอยู่ดีมีสุข อยู่ในระดับใด
                        ขอให้ท่านกากบาท X
                        ลงบนเส้นด้านล่าง </div>
                    <div class="questionQ">
                        <div class="sendQ">

                            <input type="text" id="amount" name="p26" readonly=""
                                style="border:0; color:#f6931f; font-weight:bold;font-size:20px">
                            <div id="slider-range-max"></div>
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

<script src="../js/page3.js"></script>
<?php
include '../components/layoutFooter.php';
?>