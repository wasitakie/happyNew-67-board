<?php
session_start();
include '../config/connect.php';
include '../components/layoutHead.php';
?>
<div class="container">
    <div class="col-md-12">
        <div class="logoIndex items-center content-center">
            <img src="../images/Untitled-1.jpg" alt="" srcset="" class="m-auto">
        </div>
        <div class="mb-4 mt-5 thaiFont">

            <div class="head">คำชี้แจงในการตอบแบบสำรวจ</div>
            <div class="head1">ให้ใส่เครื่องหมาย <i class="fa-solid fa-check"></i> ในช่อง <i
                    class="fa-regular fa-square-full"></i> ทุกข้อที่ท่านเลือก </div>
            <div class="head2">ส่วนที่ 2: ข้อมูลทั่วไป (ข้อคำถามจำนวน 5 ข้อ)</div>

            <form action="page2Check.php" method="post">
                <div class="box mb-3">
                    <div class="titleQ">2.1 เพศ</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="sex-1" type="radio" value="1" name="sex"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 sex">
                                <label for="sex-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    เพศชาย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="sex-2" type="radio" value="2" name="sex"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 sex">
                                <label for="sex-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    เพศหญิง </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="sex-3" type="radio" value="3" name="sex"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 sex">
                                <label for="sex-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    เพศหลากหลาย</label>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">2.2 อายุ</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <div class="mb-6 flex">
                                    <input type="text" id="default-input" name="age"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 age">
                                    <label for="default-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ปี</label>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">2.3 ท่านสำเร็จการศึกษาสูงสุดในระดับใด </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="P2-3-1" type="radio" value="1" name="p2-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3">
                                <label for="P2-3-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    1. ประถมศึกษาหรือต่ำกว่า</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-3-2" type="radio" value="2" name="p2-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3">
                                <label for="P2-3-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    มัธยมศึกษาตอนต้น</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-3-3" type="radio" value="3" name="p2-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3">
                                <label for="P2-3-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    มัธยมศึกษาตอนปลาย/ปวช.</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-3-4" type="radio" value="4" name="p2-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3">
                                <label for="P2-3-" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ปวส./อนุปริญญาหรือเทียบเท่า</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-3-5" type="radio" value="5" name="p2-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3">
                                <label for="P2-3-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ปริญญาตรี</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-3-66" type="radio" value="6" name="p2-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3">
                                <label for="P2-3-6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6.
                                    ปริญญาโท</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-3-7" type="radio" value="7" name="p2-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3">
                                <label for="P2-3-7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">7.
                                    ปริญญาเอก</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-3-8" type="radio" value="8" name="p2-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3">
                                <label for="P2-3-8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">8.
                                    ไม่ได้เรียน</label>
                            </div>
                            <div class="">
                                <div class="flex items-center mb-2">
                                    <input id="P2-3-9" type="radio" value="9" name="p2-3"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-3c">
                                    <label for="P1-2-9"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">9.
                                        อื่น ๆ ระบุ
                                    </label>
                                    <br>
                                </div>
                                <div class="mb-6">
                                    <input type="text" id="p2-3t" name="p2-3t"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p2-3t">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="box mb-3">
                    <div class="titleQ">2.4 สถานภาพสมรส </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="P2-4-1" type="radio" value="1" name="p2-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-4">
                                <label for="P2-4-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    1. โสด</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-4-2" type="radio" value="2" name="p2-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-4">
                                <label for="P2-4-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    แต่งงานและอยู่ร่วมกัน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-4-3" type="radio" value="3" name="p2-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-4">
                                <label for="P2-4-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    แต่งงานแต่ไม่ได้อยู่ด้วยกัน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-4-3" type="radio" value="4" name="p2-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-4">
                                <label for="P2-4-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    อยู่ด้วยกันโดยไม่ได้แต่งงาน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-4-3" type="radio" value="5" name="p2-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-4">
                                <label for="P2-4-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    หม้าย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-4-3" type="radio" value="6" name="p2-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-4">
                                <label for="P2-4-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6.
                                    หย่า/ แยกทาง/ เลิกกัน</label>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="box mb-3">
                    <div class="titleQ">2.5 ท่านมีบุตรหรือไม่ (รวมลูกบุญธรรม/ ลูกติด/ ลูกเลี้ยง) </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input type="number" id="p2-5t" name="p2-5t" min="0" max="5"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p2-5t">
                                <label for="default-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    &nbsp;ปี</label>
                            </div>
                            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">0 =
                                ไม่มี/
                                (ตัวเองหรือคู่ครองกำลังตั้งครรภ์ครั้งแรกในชีวิต) 1 = 1 คน
                                2 = 2 คน
                                3 = 3 คน
                                4 = 4 คน
                                5 = ตั้งแต่ 5 คน ขึ้นไป
                            </p>



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


<script src="../js/page2.js"></script>
<?php
include '../components/layoutFooter.php';
?>