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
            <div class="head2">ส่วนที่ 1: ข้อมูลหน่วยงาน (ข้อคำถามจำนวน 4 ข้อ)</div>



            <form action="page1Check.php" method="post">
                <div class="box mb-3">
                    <div class="titleQ">1.1 ชื่อหน่วยงาน/ องค์กร/ สถานประกอบการ</div>
                    <div class="questionQ">
                        <div class="sendQ"><?= $_SESSION["nameCompany"] ?></div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">1.2 หน่วยงาน/ องค์กร ที่ท่านทำงานอยู่เป็นลักษณะใด</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="P1-2-1" type="radio" value="1" name="p1-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2">
                                <label for="P1-2-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    สำนักงานใหญ่</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-2-2" type="radio" value="2" name="p1-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2">
                                <label for="P1-2-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    สาขา/ กรม/ กอง</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-2-3" type="radio" value="3" name="p1-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2">
                                <label for="P1-2-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ไซต์งาน</label>
                            </div>
                            <div class="">
                                <div class="flex items-center mb-2">
                                    <input id="P1-2-4" type="radio" value="4" name="p1-2"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2c">
                                    <label for="P1-2-4"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                        อื่น ๆ ระบุ
                                    </label>
                                    <br>
                                </div>
                                <div class="mb-6">
                                    <input type="text" id="p1-2t" name="p1-2t"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p1-2t">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box mb-3">
                    <div class="titleQ">1.3 งานที่ท่านทำเป็นงานลักษณะใด</div>

                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="P1-3-1" type="radio" value="1" name="p1-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3">
                                <label for="P1-3-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    งานสำนักงาน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-3-2" type="radio" value="2" name="p1-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3">
                                <label for="P1-3-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    งานด้านการผลิต </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-3-3" type="radio" value="3" name="p1-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3">
                                <label for="P1-3-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    งานด้านบริการ</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-3-4" type="radio" value="4" name="p1-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3">
                                <label for="P1-3-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    งานด้านบริหาร</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-3-5" type="radio" value="5" name="p1-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3">
                                <label for="P1-3-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    งานด้านวิชาการ </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1-3-6" type="radio" value="6" name="p1-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3">
                                <label for="P1-3-6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6.
                                    เจ้าของธุรกิจ/ กิจการ</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1-3-7" type="radio" value="7" name="p1-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3">
                                <label for="P1-3-7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">7
                                    .
                                    นักเรียน/นักศึกษา</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-3-8" type="radio" value="8" name="p1-3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3">
                                <label for="P1-3-8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">8.
                                    ไม่ได้ทำงาน</label>
                            </div>

                            <div class="">
                                <div class="flex items-center mb-2">
                                    <input id="P1-3-9" type="radio" value="9" name="p1-3"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-3c">
                                    <label for="P1-3-9"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">9.
                                        อื่น ๆ ระบุ
                                    </label>
                                    <br>
                                </div>
                                <div class="mb-6">
                                    <input type="text" id="p1-3t" name="p1-3t"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p1-3t">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box mb-3">
                    <div class="titleQ">1.4 ตั้งแต่ท่านเริ่มทำงานครั้งแรกของชีวิตการทำงานจนถึงการทำงานในปัจจุบัน
                        ท่านเคยลาออก/เปลี่ยนงานจากองค์กร/สถานประกอบการมาแล้วกี่ครั้ง </div>

                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="P1-4-1" type="radio" value="1" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4">
                                <label for="P1-4-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">0
                                    =
                                    ไม่เคยลาออก/เปลี่ยนงาน </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-4-2" type="radio" value="2" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4">
                                <label for="P1-4-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1
                                    = 1
                                    ครั้ง </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-4-3" type="radio" value="3" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4">
                                <label for="P1-4-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2
                                    = 2
                                    ครั้ง</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-4-4" type="radio" value="4" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4">
                                <label for="P1-4-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3
                                    = 3
                                    ครั้ง</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-4-5" type="radio" value="5" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4">
                                <label for="P1-4-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4
                                    = 4
                                    ครั้ง</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1-4-6" type="radio" value="6" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4">
                                <label for="P1-4-6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5
                                    = 5
                                    ครั้ง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1-4-7" type="radio" value="7" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4">
                                <label for="P1-4-7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6
                                    =
                                    ตั้งแต่ 6 – 8 ครั้ง</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-4-8" type="radio" value="8" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4">
                                <label for="P1-4-8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">9
                                    =
                                    ตั้งแต่ 9 – 11 ครั้ง</label>
                            </div>


                            <div class="flex items-center mb-2">
                                <input id="P1-4-9" type="radio" value="9" name="p1-4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-4c">
                                <label for="P1-4-9" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">12
                                    =
                                    ตั้งแต่ 12 ครั้งขึ้นไป
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

<script src="../js/page1.js"></script>
<?php
include '../components/layoutFooter.php';
?>