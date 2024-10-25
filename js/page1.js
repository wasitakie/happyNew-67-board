$(document).ready(function () {

    $(".p1_2_1t").prop("disabled", true);
    $(".p1_2_2t").prop("disabled", true);
    $(".p1-2t").prop("disabled", true);

    $(".p1-2a").click(function () {
        $(".p1_2_1t").prop("disabled", false);
        $(".p1_2_1t").focus();
        $(".p1_2_2t").prop("disabled", false);
        // $(".p1_2_2t").focus();

        $(".p1-2t").prop("disabled", true);
        $(".p1-2t").val("");
    });

    $(".p1-2c").click(function () {
        $(".p1_2_1t").prop("disabled", true);
        $(".p1_2_1t").val("");
        $(".p1_2_2t").prop("disabled", true);
        $(".p1_2_2t").val("");

        $(".p1-2t").prop("disabled", false);
        $(".p1-2t").focus();
    });

    $(".p1-2").click(function () {
        $(".p1_2_1t").prop("disabled", true);
        $(".p1_2_1t").val("");
        $(".p1_2_2t").prop("disabled", true);
        $(".p1_2_2t").val("");

        $(".p1-2t").prop("disabled", true);
        $(".p1-2t").val("");
    });



    $(".sub").click(function () {

        if ($("#first_name").val() == "") {
            alert("โปรดระบุปีที่องค์กร/สถานประกอบการก่อตั้ง (พ.ศ.)");
            $("#first_name").focus();
            return false;
        }


        if ($(".p1-2:checked").length == "" && $(".p1-2a:checked").length == "" && $(".p1-2c:checked").length == "") {
            alert("1.2 ประเภทองค์กร/ สถานประกอบการ");
            $("#P1-2-1").focus();
            return false;
        }
        if ($(".p1-2a:checked").length != "" && $(".p1_2_1t").val() == "" && $(".p1_2_2t").val() == "") {
            alert("สังกัด กรม/กระทรวง");
            $(".p1_2_1t").focus();
            return false;
        }


        if ($(".p1-2a:checked").length != "" && $(".p1_2_1t").val() != "" && $(".p1_2_2t").val() == "") {
            alert("กระทรวง");
            $(".p1_2_2t").focus();
            return false;
        }

        if ($(".p1-2a:checked").length != "" && $(".p1_2_1t").val() == "" && $(".p1_2_2t").val() != "") {
            alert("สังกัด กรม");
            $(".p1_2_1t").focus();
            return false;
        }




        if ($(".p1-2c:checked").length != "" && $(".p1-2t").val() == "") {
            alert("อื่น ๆ ระบุ.....");
            $(".p1-2t").focus();
            return false;
        }

        if ($(".p1_3:checked").length == "") {
            alert("1.3 องค์กร/สถานประกอบการ ของท่านมีขนาดใด");
            $("#P1_3-2").focus();
            return false;
        }


    });
});
