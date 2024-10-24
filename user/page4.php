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
            <div class="head2">ส่วนที่ 4: ความผูกพัน (Engagement) ข้อคำถามจำนวน 10 ข้อ</div>


            <form action="page4Check.php" method="post">
                <div class="box mb-3">
                    <div class="titleQ">27. ท่านจะแนะนำญาติ/เพื่อน/คนรู้จักมาทำงานที่องค์กรของท่านหรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p27-1" type="radio" value="1" name="p27"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p27">
                                <label for="p27-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่/ มีน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p27-2" type="radio" value="2" name="p27"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p27">
                                <label for="p27-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p27-3" type="radio" value="3" name="p27"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p27">
                                <label for="p27-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p27-4" type="radio" value="4" name="p27"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p27">
                                <label for="p27-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p27-5" type="radio" value="5" name="p27"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p27">
                                <label for="p27-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">28. หากมีใครกล่าวถึงองค์กรในทางที่ไม่เหมาะสม ท่านจะปกป้ององค์กรของท่านหรือไม่
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p28-1" type="radio" value="1" name="p28"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p28">
                                <label for="p28-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่/ ปกป้องน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p28-2" type="radio" value="2" name="p28"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p28">
                                <label for="p28-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p28-3" type="radio" value="3" name="p28"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p28">
                                <label for="p28-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p28-4" type="radio" value="4" name="p28"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p28">
                                <label for="p28-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p28-5" type="radio" value="5" name="p28"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p28">
                                <label for="p28-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>







                <div class="box mb-3">
                    <div class="titleQ">29. ท่านภาคภูมิใจที่ได้เป็นพนักงาน/ บุคลากรขององค์กร/ ได้ทำงานในองค์กรนี้หรือไม่
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p29-1" type="radio" value="1" name="p29"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p29">
                                <label for="p29-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่ภาคภูมิใจ/ ภูมิใจน้อยที่สุด</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p29-2" type="radio" value="2" name="p29"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p29">
                                <label for="p29-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p29-3" type="radio" value="3" name="p29"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p29">
                                <label for="p29-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p29-4" type="radio" value="4" name="p29"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p29">
                                <label for="p29-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p29-5" type="radio" value="5" name="p29"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p29">
                                <label for="p29-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">30. ขณะที่ทำงานอยู่ในองค์กรนี้
                        หากท่านมีโอกาสได้ศึกษาต่อและเมื่อสำเร็จการศึกษาแล้ว
                        ท่านจะทำงานต่อหรือว่าลาออก</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p30-1" type="radio" value="1" name="p30"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p30">
                                <label for="p30-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ลาออกแน่นอน</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p30-2" type="radio" value="2" name="p30"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p30">
                                <label for="p30-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    อาจจะลาออก</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p30-3" type="radio" value="3" name="p30"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p30">
                                <label for="p30-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    น่าจะลาออก</label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p30-4" type="radio" value="4" name="p30"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p30">
                                <label for="p30-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    ไม่ลาออก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p30-5" type="radio" value="4" name="p30"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p30">
                                <label for="p30-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    ไม่ลาออกแน่นอน
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">31. ถ้าท่านมีโอกาสเปลี่ยนสถานที่ทำงาน หรือองค์กรอื่นชวน/ติดต่อไปทำงาน
                        ท่านพร้อมที่จะไป หรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p31-1" type="radio" value="1" name="p31"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p31">
                                <label for="p31-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไปแน่นอน/ ไปทันที</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p31-2" type="radio" value="2" name="p31"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p31">
                                <label for="p31-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    คิดว่าจะไป</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p31-3" type="radio" value="3" name="p31"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p31">
                                <label for="p31-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ไม่แน่ใจ </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p31-4" type="radio" value="4" name="p31"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p31">
                                <label for="p31-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p31-5" type="radio" value="4" name="p31"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p31">
                                <label for="p31-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="box mb-3">
                    <div class="titleQ">32. ท่านรู้สึกเป็นเจ้าของร่วมขององค์กรที่ท่านทำงานในปัจจุบัน หรือไม่ </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p32-1" type="radio" value="1" name="p32"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p32">
                                <label for="p32-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่รู้สึก/ รู้สึกน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p32-2" type="radio" value="2" name="p32"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p32">
                                <label for="p32-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p32-3" type="radio" value="3" name="p32"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p32">
                                <label for="p32-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p32-4" type="radio" value="4" name="p32"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p32">
                                <label for="p32-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p32-5" type="radio" value="4" name="p32"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p32">
                                <label for="p32-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">33. ท่านทุ่มเททำงานเพื่อประโยชน์ขององค์กรของท่านหรือไม่ </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p33-1" type="radio" value="1" name="p33"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p33">
                                <label for="p33-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่/ ทุ่มเทน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p33-2" type="radio" value="2" name="p33"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p33">
                                <label for="p33-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p33-3" type="radio" value="3" name="p33"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p33">
                                <label for="p33-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p33-4" type="radio" value="4" name="p33"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p33">
                                <label for="p33-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p33-5" type="radio" value="4" name="p33"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p33">
                                <label for="p33-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">34. ท่านเป็นคน คิดใหม่ ทำใหม่ เพื่อสร้างความก้าวหน้าให้กับองค์กรของท่านหรือไม่
                    </div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p34-1" type="radio" value="1" name="p34"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p34">
                                <label for="p34-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่/ น้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p34-2" type="radio" value="2" name="p34"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p34">
                                <label for="p34-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p34-3" type="radio" value="3" name="p34"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p34">
                                <label for="p34-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p34-4" type="radio" value="4" name="p34"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p34">
                                <label for="p34-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p34-5" type="radio" value="4" name="p34"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p34">
                                <label for="p34-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="box mb-3">
                    <div class="titleQ">35. ในแต่ละวัน ท่านทำงานอย่างมีเป้าหมาย หรือไม่</div>
                    <div class="questionQ">
                        <div class="sendQ">
                            <div class="flex items-center mb-2">
                                <input id="p35-1" type="radio" value="1" name="p35"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p35">
                                <label for="p35-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1.
                                    ไม่รู้สึก/ รู้สึกน้อยที่สุด </label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p35-2" type="radio" value="2" name="p35"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p35">
                                <label for="p35-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2.
                                    น้อย</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input id="p35-3" type="radio" value="3" name="p35"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p35">
                                <label for="p35-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3.
                                    ปานกลาง </label>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p35-4" type="radio" value="4" name="p35"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p35">
                                <label for="p35-4" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">4.
                                    มาก
                                </label>
                                <br>
                            </div>

                            <div class="flex items-center mb-2">
                                <input id="p35-5" type="radio" value="4" name="p35"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 p35">
                                <label for="p35-5" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">5.
                                    มากที่สุด
                                </label>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="box mb-3">
                    <div class="titleQ">36. จากระดับ 0 – 10 ท่านมี ความผูกพันองค์ร อยู่ในระดับใด ขอให้ท่านกากบาท X
                        ลงบนเส้นด้านล่าง </div>
                    <div class="questionQ">
                        <div class="sendQ">

                            <input type="text" id="amount" readonly="" name="p36"
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

<script src="../js/page4.js"></script>
<?php
include '../components/layoutFooter.php';
?>