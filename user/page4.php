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
            <div class="head2">ส่วนที่ 4: ผลิตภาพ (Productivity) (ข้อคำถามจำนวน 19 ข้อ)</div>


            <form action="page4Check.php" method="post">

                <div class="titleQ">ท่านคิดว่า การส่งเสริมองค์กรแห่งความสุข
                    มีแนวโน้มในการช่วยให้กิจการของท่านประสบความสำเร็จด้านต่าง ๆ ระดับใด
                    กรุณาทำเครื่องหมายวงกลมรอบตัวเลขในแต่ละข้อที่ตรงกับความเห็นของท่านมากที่สุด </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5 mb-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    ด้านที่ประสบผลสำเร็จ
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    ไม่
                                    เห็นด้วย<br>
                                    1

                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    เห็นด้วย
                                    น้อย<br>
                                    2

                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    เห็นด้วยปานกลาง<br>
                                    3

                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    เห็นด้วย
                                    มาก<br>
                                    4

                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    เห็นด้วย
                                    มากที่สุด<br>
                                    5


                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.1 สร้างผลผลิตที่มีคุณภาพ (Quality)
                                </th>

                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.1.1 ความพึงพอใจของลูกค้าในด้านคุณภาพและบริการเพิ่มขึ้น
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-1" value="1" class="p4-1-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-1" value="2" class="p4-1-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-1" value="3" class="p4-1-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-1" value="4" class="p4-1-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-1" value="5" class="p4-1-1">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.1.2 เสียงสะท้อนจากลูกค้าในเชิงลบ ลดน้อยลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-2" value="1" class="p4-1-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-2" value="2" class="p4-1-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-2" value="3" class="p4-1-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-2" value="4" class="p4-1-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-2" value="5" class="p4-1-2">

                                </td>
                            </tr>

                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.1.3 งานซ่อม, จำนวนของเสีย เปอร์เซ็นต์ Defect ลดลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-3" value="1" class="p4-1-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-3" value="2" class="p4-1-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-3" value="3" class="p4-1-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-3" value="4" class="p4-1-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-1-3" value="5" class="p4-1-3">

                                </td>
                            </tr>

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.2 ลดต้นทุน (Cost)
                                </th>

                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.2.1 สูญเสียทรัพยากรด้านวัตถุดิบลดน้อยลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-1" value="1" class="p4-2-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-1" value="2" class="p4-2-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-1" value="3" class="p4-2-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-1" value="4" class="p4-2-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-1" value="5" class="p4-2-1">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.2.2 สูญเสียทรัพยากรด้านพลังงานลดน้อยลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-2" value="1" class="p4-2-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-2" value="2" class="p4-2-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-2" value="3" class="p4-2-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-2" value="4" class="p4-2-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-2" value="5" class="p4-2-2">

                                </td>
                            </tr>

                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.2.3 สูญเสียทรัพยากรด้านวัสดุสิ้นเปลืองลดน้อยลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="1" class="p4-2-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="2" class="p4-2-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="3" class="p4-2-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="4" class="p4-2-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="5" class="p4-2-3">

                                </td>
                            </tr>

                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.2.3 สูญเสียทรัพยากรด้านวัสดุสิ้นเปลืองลดน้อยลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="1" class="p4-2-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="2" class="p4-2-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="3" class="p4-2-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="4" class="p4-2-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-2-3" value="5" class="p4-2-3">

                                </td>
                            </tr>

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.3 การส่งมอบสินค้าอย่างถูกต้อง ถูกสถานที่ ถูกเวลา (Delivery)
                                </th>

                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.3.1 ทำงานเสร็จตรงตามเวลา
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-1" value="1" class="p4-3-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-1" value="2" class="p4-3-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-1" value="3" class="p4-3-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-1" value="4" class="p4-3-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-1" value="5" class="p4-3-1">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.3.2 สามารถผลิตสินค้าได้ตามจำนวนและคุณภาพตามที่ลูกค้าสั่ง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-2" value="1" class="p4-3-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-2" value="2" class="p4-3-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-2" value="3" class="p4-3-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-2" value="4" class="p4-3-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-3-2" value="5" class="p4-3-2">

                                </td>
                            </tr>


                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.4 สภาพแวดล้อมในที่ทำงานปลอดภัยขึ้น (Safety)
                                </th>

                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.4.1 อุบัติเหตุในการทำงานลดน้อยลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-1" value="1" class="p4-4-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-1" value="2" class="p4-4-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-1" value="3" class="p4-4-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-1" value="4" class="p4-4-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-1" value="5" class="p4-4-1">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.4.2 มีสภาพแวดล้อมที่ปลอดภัยในที่ทำงาน (แสงสว่าง ป้ายเตือน การระบายอากาศ)
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-2" value="1" class="p4-4-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-2" value="2" class="p4-4-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-2" value="3" class="p4-4-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-2" value="4" class="p4-4-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-4-2" value="5" class="p4-4-2">

                                </td>
                            </tr>

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.5 พนักงานมีขวัญกำลังใจที่ดีขึ้น (Moral)
                                </th>

                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.5.1 พนักงานลาออกลดน้อยลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-1" value="1" class="p4-5-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-1" value="2" class="p4-5-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-1" value="3" class="p4-5-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-1" value="4" class="p4-5-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-1" value="5" class="p4-5-1">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.5.2 พนักงานลาป่วย ลากิจ น้อยลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-2" value="1" class="p4-5-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-2" value="2" class="p4-5-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-2" value="3" class="p4-5-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-2" value="4" class="p4-5-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-2" value="5" class="p4-5-2">

                                </td>
                            </tr>

                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.5.3 อัตราการมาสายหรือกลับก่อนเวลาลดลง
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-3" value="1" class="p4-5-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-3" value="2" class="p4-5-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-3" value="3" class="p4-5-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-3" value="4" class="p4-5-3">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-3" value="5" class="p4-5-3">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.5.4 พนักงานมีความทุ่มเทในการทำงาน
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-4" value="1" class="p4-5-4">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-4" value="2" class="p4-5-4">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-4" value="3" class="p4-5-4">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-4" value="4" class="p4-5-4">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-4" value="5" class="p4-5-4">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.5.5 บรรยากาศความร่วมมือในการทำงาน
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-5" value="1" class="p4-5-5">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-5" value="2" class="p4-5-5">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-5" value="3" class="p4-5-5">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-5" value="4" class="p4-5-5">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-5-5" value="5" class="p4-5-5">

                                </td>
                            </tr>

                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.6 ดำเนินธุรกิจได้โดยไม่กระทบสิ่งแวดล้อม (Environment)
                                </th>

                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.6.1 มีการจัดการของเสีย/นำของเสียมาใช้ประโยชน์
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-1" value="1" class="p4-6-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-1" value="2" class="p4-6-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-1" value="3" class="p4-6-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-1" value="4" class="p4-6-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-1" value="5" class="p4-6-1">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.6.2 จัดการสิ่งแวดล้อม และแก้ปัญหาสิ่งแวดล้อมมากขึ้น
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-2" value="1" class="p4-6-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-2" value="2" class="p4-6-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-2" value="3" class="p4-6-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-2" value="4" class="p4-6-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-6-2" value="5" class="p4-6-2">

                                </td>
                            </tr>


                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.7 ดำเนินธุรกิจอย่างมีจรรยาบรรณ (Ethics)
                                </th>

                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.7.1 มีกิจกรรมช่วยเหลือสังคม/ ทำ CSR
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-1" value="1" class="p4-7-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-1" value="2" class="p4-7-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-1" value="3" class="p4-7-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-1" value="4" class="p4-7-1">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-1" value="5" class="p4-7-1">

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4.7.2 จำนวนข้อร้องเรียนเนื่องมาจากสังคม/ ชุมชนรอบข้างลดลง (หรือไม่มีเลย)
                                </th>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-2" value="1" class="p4-7-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-2" value="2" class="p4-7-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-2" value="3" class="p4-7-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-2" value="4" class="p4-7-2">

                                </td>
                                <td class="px-6 py-4 text-center">
                                    <input type="radio" name="p4-7-2" value="5" class="p4-7-2">

                                </td>
                            </tr>



                        </tbody>
                    </table>
                </div>




                <div class=" mb-3">
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