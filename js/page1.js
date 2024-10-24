$(document).ready(function () {
    $("#p1-2t").prop("disabled", true);

    $(".p1-2c").click(function () {
        $("#p1-2t").prop("disabled", false);
        $("#p1-2t").focus();
    });

    $(".p1-2").click(function () {
        $("#p1-2t").prop("disabled", true);
        $("#p1-2t").val("");
    });

    $("#p1-3t").prop("disabled", true);

    $(".p1-3c").click(function () {
        $("#p1-3t").prop("disabled", false);
        $("#p1-3t").focus();
    });

    $(".p1-3").click(function () {
        $("#p1-3t").prop("disabled", true);
        $("#p1-3t").val("");
    });

    $(".sub").click(function () {
        if ($(".p1-2:checked").length == "" && $(".p1-2c:checked").length == "") {
            alert("1.2 หน่วยงาน/ องค์กร ที่ท่านทำงานอยู่เป็นลักษณะใด");
            $("#P1-2-1").focus();
            return false;
        }

        if ($(".p1-2c:checked").length != "" && $("#p1-2t").val() == "") {
            alert("1.2 อื่น ๆ ระบุ");
            $("#p1-2t").focus();
            return false;
        }

        if ($(".p1-3:checked").length == "" && $(".p1-3c:checked").length == "") {
            alert("1.2 หน่วยงาน/ องค์กร ที่ท่านทำงานอยู่เป็นลักษณะใด");
            $("#P1-3-1").focus();
            return false;
        }

        if ($(".p1-3c:checked").length != "" && $("#p1-3t").val() == "") {
            alert("1.3 อื่น ๆ ระบุ");
            $("#p1-3t").focus();
            return false;
        }

        if ($(".p1-4:checked").length == "") {
            alert(
                "1.4 ตั้งแต่ท่านเริ่มทำงานครั้งแรกของชีวิตการทำงานจนถึงการทำงานในปัจจุบัน ท่านเคยลาออก/เปลี่ยนงานจากองค์กร/สถานประกอบการมาแล้วกี่ครั้ง"
            );
            $("#P1-4-1").focus();
            return false;
        }



    });
});
