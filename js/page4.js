$(document).ready(function () {
    $(".sub").click(function () {


        if ($(".p4-1-1:checked").length == "") {
            alert("4.1.1 ความพึงพอใจของลูกค้าในด้านคุณภาพและบริการเพิ่มขึ้น");
            $(".p4-1-1").focus();
            return false;
        }

        if ($(".p4-1-2:checked").length == "") {
            alert("4.1.2 เสียงสะท้อนจากลูกค้าในเชิงลบ ลดน้อยลง");
            $(".p4-1-2").focus();
            return false;
        }
        if ($(".p4-1-3:checked").length == "") {
            alert("4.1.3 งานซ่อม, จำนวนของเสีย เปอร์เซ็นต์ Defect ลดลง");
            $(".p4-1-3").focus();
            return false;
        }

        if ($(".p4-2-1:checked").length == "") {
            alert("4.2.1 สูญเสียทรัพยากรด้านวัตถุดิบลดน้อยลง");
            $(".p4-2-1").focus();
            return false;
        }

        if ($(".p4-2-2:checked").length == "") {
            alert("4.2.2 สูญเสียทรัพยากรด้านพลังงานลดน้อยลง");
            $(".p4-2-2").focus();
            return false;
        }

        if ($(".p4-2-3:checked").length == "") {
            alert("4.2.3 สูญเสียทรัพยากรด้านวัสดุสิ้นเปลืองลดน้อยลง");
            $(".p4-2-3").focus();
            return false;
        }

        if ($(".p4-3-1:checked").length == "") {
            alert("4.3.1 ทำงานเสร็จตรงตามเวลา");
            $(".p4-3-1").focus();
            return false;
        }

        if ($(".p4-3-2:checked").length == "") {
            alert("4.3.2 สามารถผลิตสินค้าได้ตามจำนวนและคุณภาพตามที่ลูกค้าสั่ง");
            $(".p4-3-2").focus();
            return false;
        }

        if ($(".p4-4-1:checked").length == "") {
            alert("4.4.1 อุบัติเหตุในการทำงานลดน้อยลง");
            $(".p4-4-1").focus();
            return false;
        }
        if ($(".p4-4-2:checked").length == "") {
            alert("4.4.2 มีสภาพแวดล้อมที่ปลอดภัยในที่ทำงาน (แสงสว่าง ป้ายเตือน การระบายอากาศ)");
            $(".p4-4-2").focus();
            return false;
        }
        if ($(".p4-5-1:checked").length == "") {
            alert("4.5.1 พนักงานลาออกลดน้อยลง");
            $(".p4-5-1").focus();
            return false;
        }
        if ($(".p4-5-2:checked").length == "") {
            alert("4.5.2 พนักงานลาป่วย ลากิจ น้อยลง");
            $(".p4-5-2").focus();
            return false;
        }
        if ($(".p4-5-3:checked").length == "") {
            alert("4.5.3 อัตราการมาสายหรือกลับก่อนเวลาลดลง");
            $(".p4-5-3").focus();
            return false;
        }
        if ($(".p4-5-4:checked").length == "") {
            alert("4.5.4 พนักงานมีความทุ่มเทในการทำงาน");
            $(".p4-5-4").focus();
            return false;
        }
        if ($(".p4-5-5:checked").length == "") {
            alert("4.5.5 บรรยากาศความร่วมมือในการทำงาน");
            $(".p4-5-5").focus();
            return false;
        }

        if ($(".p4-6-1:checked").length == "") {
            alert("4.6.1 มีการจัดการของเสีย/นำของเสียมาใช้ประโยชน์");
            $(".p4-6-1").focus();
            return false;
        }
        if ($(".p4-6-2:checked").length == "") {
            alert("4.6.2 จัดการสิ่งแวดล้อม และแก้ปัญหาสิ่งแวดล้อมมากขึ้น");
            $(".p4-6-2").focus();
            return false;
        }

        if ($(".p4-7-1:checked").length == "") {
            alert("4.7.1 มีกิจกรรมช่วยเหลือสังคม/ ทำ CSR");
            $(".p4-7-1").focus();
            return false;
        }
        if ($(".p4-7-2:checked").length == "") {
            alert("4.7.2 จำนวนข้อร้องเรียนเนื่องมาจากสังคม/ ชุมชนรอบข้างลดลง (หรือไม่มีเลย)");
            $(".p4-7-2").focus();
            return false;
        }



    });
});