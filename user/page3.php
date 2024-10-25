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
            <div class="head2">ส่วนที่ 3: การเพิ่มผลิตภาพ ในองค์กรแห่งความสุข (ข้อคำถามจำนวน 4 ข้อ)</div>


            <form action="page3Check.php" method="post">


                <div class="box mb-3">
                    <div class="titleQ">3.1 องค์กรแห่งความสุขสามารถส่งผลต่อการพัฒนาผลิตภาพในองค์กรของท่าน </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p3-1-1" type="radio" value="1" name="p3-1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-1">
                                <label for="p3-1-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่เห็นด้วย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-1-2" type="radio" value="2" name="p3-1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-1">
                                <label for="p3-1-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    เห็นด้วยน้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-1-3" type="radio" value="3" name="p3-1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-1">
                                <label for="p3-1-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    เห็นด้วยปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-1-4" type="radio" value="4" name="p3-1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-1">
                                <label for="p3-1-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    เห็นด้วยมาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-1-5" type="radio" value="5" name="p3-1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-1">
                                <label for="p3-1-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    เห็นด้วยมากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">3.2 พนักงานที่มีสุขภาวะและความอยู่ดีมีสุข ช่วยเพิ่มผลผลิตขององค์กรได้</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p3-2-1" type="radio" value="1" name="p3-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-2">
                                <label for="p3-2-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่เห็นด้วย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-2-2" type="radio" value="2" name="p3-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-2">
                                <label for="p3-2-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    เห็นด้วยน้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-2-3" type="radio" value="3" name="p3-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-2">
                                <label for="p3-2-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    เห็นด้วยปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-2-4" type="radio" value="4" name="p3-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-2">
                                <label for="p3-2-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    เห็นด้วยมาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-2-5" type="radio" value="5" name="p3-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-2">
                                <label for="p3-2-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    เห็นด้วยมากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">3.3 การพัฒนาคน ช่วยให้องค์กรของท่านประสบความสำเร็จตามเป้าหมายได้</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p3-3-1" type="radio" value="1" name="p3-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-3">
                                <label for="p3-3-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่เห็นด้วย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-3-2" type="radio" value="2" name="p3-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-3">
                                <label for="p3-3-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    เห็นด้วยน้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-3-3" type="radio" value="3" name="p3-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-3">
                                <label for="p3-3-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    เห็นด้วยปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-3-4" type="radio" value="4" name="p3-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-3">
                                <label for="p3-3-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    เห็นด้วยมาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-3-5" type="radio" value="5" name="p3-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-3">
                                <label for="p3-3-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    เห็นด้วยมากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="box mb-3">
                    <div class="titleQ">3.4 องค์กรของท่านใช้จ่ายงบประมาณในการส่งเสริม ความสุข
                        และคุณภาพชีวิตของบุคลากร/พนักงานในองค์กรปีละประมาณเท่าใด </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p3-4-1" type="radio" value="1" name="p3-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-4">
                                <label for="p3-4-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่มีงบประมาณในส่วนนี้</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-4-2" type="radio" value="2" name="p3-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-4">
                                <label for="p3-4-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อยกว่า 10,000 บาท</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-4-3" type="radio" value="3" name="p3-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-4">
                                <label for="p3-4-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    10,001 -50,000 บาท</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-4-4" type="radio" value="4" name="p3-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-4">
                                <label for="p3-4-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    50,001- 100,000 บาท
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p3-4-5" type="radio" value="5" name="p3-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-4">
                                <label for="p3-4-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    100,001- 500,000 บาท
                                </label>
                                <br>
                            </div>


                            <div class="flex items-center mb-2">
                                <input id="p3-4-6" type="radio" value="6" name="p3-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-4">
                                <label for="p3-4-6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6.
                                    100,001- 500,000 บาท
                                </label>
                                <br>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-4-7" type="radio" value="7" name="p3-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-4">
                                <label for="p3-4-7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">7.
                                    100,001- 500,000 บาท
                                </label>
                                <br>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p3-4-8" type="radio" value="8" name="p3-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p3-4">
                                <label for="p3-4-8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">8.
                                    100,001- 500,000 บาท
                                </label>
                                <br>
                            </div>

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