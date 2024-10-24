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
                        <div class="">
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">โปรดระบุปีที่องค์กร/สถานประกอบการก่อตั้ง
                                (พ.ศ.)55</label>
                            <input type="text" id="first_name"
                                class="w-2/5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">1.2 ประเภทองค์กร/ สถานประกอบการ</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex  items-center mb-2">
                                <div class="">
                                    <input id="P1-2-1" type="radio" value="1" name="p1-2"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2">
                                    <label for="P1-2-1"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                        หน่วยงานภาครัฐ</label>

                                    <div class="flex">
                                        <div class="mr-2">
                                            <label for=""
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">สังกัด</label>
                                            <input type="text" id="p1_2_1t" name="p1_2_1t"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p1_2_1t">
                                        </div>
                                        <div class="">
                                            <label for=""
                                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">กระทรวง</label>
                                            <input type="text" id="p1_2_2t" name="p1_2_2t"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/5 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p1_2_2t">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-2-2" type="radio" value="2" name="p1-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2">
                                <label for="P1-2-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    หน่วยงานรัฐวิสาหกิจ</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1-2-3" type="radio" value="3" name="p1-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2">
                                <label for="P1-2-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    หน่วยงานเอกชน </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1-2-4" type="radio" value="4" name="p1-2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2">
                                <label for="P1-2-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    วิสาหกิจขนาดกลางและขนาดย่อม (SME)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1_2-5" type="radio" value="5" name="p1_2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_2">
                                <label for="P1_2-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    วิสาหกิจชุมชน </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1_2-6" type="radio" value="6" name="p1_2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_2">
                                <label for="P1_2-6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6.
                                    Start-up</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1_2-7" type="radio" value="7" name="p1_2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_2">
                                <label for="P1_2-7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">7
                                    . สถาบันการศึกษา</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1_2-8" type="radio" value="8" name="p1_2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_2">
                                <label for="P1_2-8" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">8.
                                    องค์กรพัฒนาเอกชน (NGO)/ องค์กรระหว่างประเทศ</label>
                            </div>

                            <div class="">
                                <div class="flex items-center mb-2">
                                    <input id="P1-2-9" type="radio" value="9" name="p1-2"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1-2c">
                                    <label for="P1-2-9"
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
                    <div class="titleQ">1.3 องค์กร/สถานประกอบการ ของท่านมีขนาดใด </div>

                    <div class="questionQ">
                        <div class="sendQ">

                            <div class="flex items-center mb-2">
                                <input id="P1_3-2" type="radio" value="1" name="p1_3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_3">
                                <label for="P1_3-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ขนาดเล็กมาก (1-20 คน)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1_3-3" type="radio" value="2" name="p1_3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_3">
                                <label for="P1_3-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    2. ขนาดเล็ก (21-50 คน)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1_3-4" type="radio" value="3" name="p1_3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_3">
                                <label for="P1_3-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ขนาดกลาง (51-200 คน)</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="P1_3-5" type="radio" value="4" name="p1_3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_3">
                                <label for="P1_3-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ขนาดใหญ่ (201-500 คน)</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1_3-6" type="radio" value="5" name="p1_3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_3">
                                <label for="P1_3-6" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ขนาดใหญ่มาก (501–1,000 คน)</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="P1_3-7" type="radio" value="6" name="p1_3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p1_3">
                                <label for="P1_3-7" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">6.
                                    ขนาดใหญ่มากที่สุด (1,001 คนขึ้นไป)</label>
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