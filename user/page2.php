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
                    <div class="titleQ">2.4 ตำแหน่งของท่าน ในองค์กร/สถานประกอบการ</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <div class="mb-6 flex">
                                    <input type="text" id="default-input" name="2_4t"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 2_4t">

                                </div>
                            </div>


                        </div>
                    </div>
                </div>



                <div class="box mb-3">
                    <div class="titleQ">2.5 ประเด็นท้าทาย (เรื่องยากที่อยากทำ)
                        ในการบริหารจัดการบุคลากรในองค์กร/สถานประกอบการ (เลือกตอบได้มากกว่า 1ข้อ)</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="P2-5-1" type="checkbox" value="1" name="p2-5-1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    1. เกิดการผิดพลาดในการทำงานบ่อยครั้ง (ทำให้ผลิตภัณฑ์เสียหาย/ ด้อยคุณภาพ)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-2" type="checkbox" value="2" name="p2-5-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    พนักงานไม่ช่วยประหยัดต้นทุน (ใช้วัสดุหรือทรัพยากรสิ้นเปลือง) </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-3" type="checkbox" value="3" name="p2-5-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    พนักงานมีส่วนก่อให้เกิดความเสียหายในการส่งมอบสินค้า ส่งมอบสินค้าไม่ถูกต้อง/
                                    ส่งผิดสถานที่/ ส่งมอบสินค้าล่าช้า</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-4" type="checkbox" value="4" name="p2-5-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    พนักงานทำงานขาดความระมัดระวัง ก่อให้เกิดความไม่ปลอดภัย หรือเกิดอุบัติเหตุ</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-5" type="checkbox" value="5" name="p2-5-5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    พนักงานลาออกบ่อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-6" type="checkbox" value="6" name="p2-5-6"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6.
                                    พนักงานมาสาย หรือ กลับเร็ว</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-7" type="checkbox" value="7" name="p2-5-7"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">7.
                                    บรรยากาศของความขัดแย้งในการทำงาน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-8" type="checkbox" value="8" name="p2-5-8"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">8.
                                    พนักงานไม่ทุ่มเทในการทำงาน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-9" type="checkbox" value="9" name="p2-5-9"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">9.
                                    พนักงานเสนอความคิดเห็นต่อหัวหน้างาน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-10" type="checkbox" value="10" name="p2-5-10"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-10"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">10.
                                    พนักงานมีความคิดสร้างสรรค์ และนำเสนอผลงานสร้างสรรค์</label>
                            </div>
                            <div class="">
                                <div class="flex items-center mb-2">
                                    <input id="P2-5-11" type="checkbox" value="11" name="p2-5-11"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5c">
                                    <label for="P1-2-11"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">11.
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
                    <div class="titleQ">2.6 เมื่อองค์กรของท่านต้องรับพนักงานใหม่ ทักษะของพนักงานด้านใดบ้างที่ท่านต้องการ
                        (เลือกตอบได้มากกว่า 1 ข้อ)</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="P2-5-1" type="checkbox" value="1" name="p2-5-1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    1. เกิดการผิดพลาดในการทำงานบ่อยครั้ง (ทำให้ผลิตภัณฑ์เสียหาย/ ด้อยคุณภาพ)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-2" type="checkbox" value="2" name="p2-5-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    พนักงานไม่ช่วยประหยัดต้นทุน (ใช้วัสดุหรือทรัพยากรสิ้นเปลือง) </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-3" type="checkbox" value="3" name="p2-5-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    พนักงานมีส่วนก่อให้เกิดความเสียหายในการส่งมอบสินค้า ส่งมอบสินค้าไม่ถูกต้อง/
                                    ส่งผิดสถานที่/ ส่งมอบสินค้าล่าช้า</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-4" type="checkbox" value="4" name="p2-5-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    พนักงานทำงานขาดความระมัดระวัง ก่อให้เกิดความไม่ปลอดภัย หรือเกิดอุบัติเหตุ</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-5" type="checkbox" value="5" name="p2-5-5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    พนักงานลาออกบ่อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-6" type="checkbox" value="6" name="p2-5-6"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6.
                                    พนักงานมาสาย หรือ กลับเร็ว</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-7" type="checkbox" value="7" name="p2-5-7"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">7.
                                    บรรยากาศของความขัดแย้งในการทำงาน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-8" type="checkbox" value="8" name="p2-5-8"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">8.
                                    พนักงานไม่ทุ่มเทในการทำงาน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-9" type="checkbox" value="9" name="p2-5-9"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">9.
                                    พนักงานเสนอความคิดเห็นต่อหัวหน้างาน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-10" type="checkbox" value="10" name="p2-5-10"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-10"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">10.
                                    พนักงานมีความคิดสร้างสรรค์ และนำเสนอผลงานสร้างสรรค์</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P2-5-11" type="checkbox" value="11" name="p2-5-11"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5">
                                <label for="P2-5-11"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">11.
                                    การบริหารจัดการเวลา </label>
                            </div>
                            <div class="">
                                <div class="flex items-center mb-2">
                                    <input id="P2-5-12" type="checkbox" value="12" name="p2-5-12"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p2-5c">
                                    <label for="P1-2-12"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">12.
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