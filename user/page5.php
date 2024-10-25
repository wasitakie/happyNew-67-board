<?php
session_start();
include '../session/user.php';
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
            <div class="head2">ส่วนที่ 5: สมดุลระหว่างชีวิตและการทำงาน (Work-Life Balance) ข้อคำถามจำนวน 3 ข้อ</div>


            <form action="page5Check.php" method="post">
                <div class="box mb-3">
                    <div class="titleQ">37. ในชีวิตการทำงานของท่าน ท่านรู้สึกว่า โดยทั่วไปท่านทำงานเฉลี่ยวันละกี่ชั่วโมง
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p37-1" type="radio" value="1" name="p37"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p37">
                                <label for="p37-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    รู้สึกว่าทำงานเกินกว่า 12 ชั่วโมง/วัน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p37-2" type="radio" value="2" name="p37"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p37">
                                <label for="p37-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    รู้สึกว่าทำงาน 11 – 12 ชั่วโมง/วัน </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p37-3" type="radio" value="3" name="p37"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p37">
                                <label for="p37-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    รู้สึกว่าทำงาน 9 – 10 ชั่วโมง/วัน</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p37-4" type="radio" value="4" name="p37"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p37">
                                <label for="p37-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    รู้สึกว่าทำงาน 7 – 8 ชั่วโมง/วัน
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p37-5" type="radio" value="5" name="p37"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p37">
                                <label for="p37-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    รู้สึกว่าทำงาน 6 ชั่วโมง หรือน้อยกว่า 6 ชั่วโมง/วัน
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">38. หน่วยงานของท่านมีความยืดหยุ่นในการทำงานหรือไม่ (เช่น
                        ความยืดหยุ่นในการทำงานนอกสถานที่
                        ไม่ต้องเข้างาน/ ออกงานตามเวลาที่กำหนด/ สามารถเลือกวันหยุดของตนเองได้ ฯลฯ)
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p38-1" type="radio" value="1" name="p38"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p38">
                                <label for="p38-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่/ น้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p38-2" type="radio" value="2" name="p38"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p38">
                                <label for="p38-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p38-3" type="radio" value="3" name="p38"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p38">
                                <label for="p38-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p38-4" type="radio" value="4" name="p38"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p38">
                                <label for="p38-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p38-5" type="radio" value="5" name="p38"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p38">
                                <label for="p38-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>







                <div class="box mb-3">
                    <div class="titleQ">39. โดยเฉลี่ยใน 1 สัปดาห์
                        ท่านสามารถจัดสรรเวลาในการทำงานกับการใช้ชีวิตประจำวันได้มากน้อยเพียงใด
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p39-1" type="radio" value="1" name="p39"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p39">
                                <label for="p39-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่สามารถจัดสรรเวลาในการทำงานกับการใช้ชีวิตประจำวันได้เลย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p39-2" type="radio" value="2" name="p39"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p39">
                                <label for="p39-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    สามารถจัดสรรเวลาได้น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p39-3" type="radio" value="3" name="p39"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p39">
                                <label for="p39-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    สามารถจัดสรรเวลาได้ปานกลาง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p39-4" type="radio" value="4" name="p39"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p39">
                                <label for="p39-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    สามารถจัดสรรเวลาได้มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p39-5" type="radio" value="5" name="p39"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p39">
                                <label for="p39-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    สามารถจัดสรรเวลาได้มากที่สุด
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

<script src="../js/page5.js"></script>
<?php
include '../components/layoutFooter.php';
?>