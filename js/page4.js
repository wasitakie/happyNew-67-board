$(document).ready(function () {
    $(".sub").click(function () {


        if ($(".p27:checked").length == "") {
            alert("27. ท่านจะแนะนำญาติ/เพื่อน/คนรู้จักมาทำงานที่องค์กรของท่านหรือไม่");
            $("#p27-1").focus();
            return false;
        }

        if ($(".p28:checked").length == "") {
            alert("28. หากมีใครกล่าวถึงองค์กรในทางที่ไม่เหมาะสม ท่านจะปกป้ององค์กรของท่านหรือไม่");
            $("#p28-1").focus();
            return false;
        }

        if ($(".p29:checked").length == "") {
            alert("29. ท่านภาคภูมิใจที่ได้เป็นพนักงาน/ บุคลากรขององค์กร/ ได้ทำงานในองค์กรนี้หรือไม่");
            $("#p29-1").focus();
            return false;
        }

        if ($(".p30:checked").length == "") {
            alert("30. ขณะที่ทำงานอยู่ในองค์กรนี้ หากท่านมีโอกาสได้ศึกษาต่อและเมื่อสำเร็จการศึกษาแล้ว ท่านจะทำงานต่อหรือว่าลาออก");
            $("#p30-1").focus();
            return false;
        }

        if ($(".p31:checked").length == "") {
            alert("31. ถ้าท่านมีโอกาสเปลี่ยนสถานที่ทำงาน หรือองค์กรอื่นชวน/ติดต่อไปทำงานท่านพร้อมที่จะไป หรือไม่");
            $("#p31-1").focus();
            return false;
        }

        if ($(".p32:checked").length == "") {
            alert("32. ท่านรู้สึกเป็นเจ้าของร่วมขององค์กรที่ท่านทำงานในปัจจุบัน หรือไม่");
            $("#p32-1").focus();
            return false;
        }

        if ($(".p33:checked").length == "") {
            alert("33. ท่านทุ่มเททำงานเพื่อประโยชน์ขององค์กรของท่านหรือไม่");
            $("#p33-1").focus();
            return false;
        }

        if ($(".p34:checked").length == "") {
            alert("34. ท่านเป็นคน คิดใหม่ ทำใหม่ เพื่อสร้างความก้าวหน้าให้กับองค์กรของท่านหรือไม่");
            $("#p34-1").focus();
            return false;
        }

        if ($(".p35:checked").length == "") {
            alert("35. ในแต่ละวัน ท่านทำงานอย่างมีเป้าหมาย หรือไม่");
            $("#p35-1").focus();
            return false;
        }



    });
});