$(document).ready(function () {

  $("#p2-3t").prop("disabled", true);

  $(".p2-3c").click(function () {
    $("#p2-3t").prop("disabled", false);
    $("#p2-3t").focus();
  });

  $(".p2-3").click(function () {
    $("#p2-3t").prop("disabled", true);
    $("#p2-3t").val("");
  });

  $("#p2-5t").prop("disabled", true);

  $(".p2-5c").click(function () {
    $("#p2-5t").prop("disabled", false);
    $("#p2-5t").focus();
  });

  $(".p2-5").click(function () {
    $("#p2-5t").prop("disabled", true);
    $("#p2-5t").val("");
  });

  $("#p2-6t").prop("disabled", true);

  $(".p2-6c").click(function () {
    $("#p2-6t").prop("disabled", false);
    $("#p2-6t").focus();
  });

  $(".p2-6").click(function () {
    $("#p2-6t").prop("disabled", true);
    $("#p2-6t").val("");
  });



  $(".sub").click(function () {

    if ($(".sex:checked").length == "") {
      alert("2.1 เพศ");
      $("#sex-1").focus();
      return false;
    }

    if ($(".age").val() == "") {
      alert("2.2 อายุ");
      $(".age").focus();
      return false;
    }

    if ($(".p2-3:checked").length == "" && $(".p2-3c:checked").length == "") {
      alert("2.3 ท่านสำเร็จการศึกษาสูงสุดในระดับใด");
      $("#P2-3-1").focus();
      return false;
    }

    if ($(".p2-3c:checked").length != "" && $(".p2-3t").val() == "") {
      alert("2.3 โปรดระบุ");
      $(".p2-3t").focus();
      return false;
    }

    if ($(".2_4t").val() == "") {
      alert("2.4 ตำแหน่งของท่าน ในองค์กร/สถานประกอบการ");
      $("#2_4t").focus();
      return false;
    }

    if ($(".p2-5:checked").length == "" && $(".p2-5c:checked").length == "") {
      alert("2.5 ประเด็นท้าทาย (เรื่องยากที่อยากทำ) ในการบริหารจัดการบุคลากรในองค์กร/สถานประกอบการ (เลือกตอบได้มากกว่า 1ข้อ)");
      $("#P2-5-1").focus();
      return false;
    }

    if ($("p2-5c:checked").length !== "" && $("#p2-5t").val() == "") {
      alert("2.5 อื่น ๆ ระบุ....");
      $("#p2-5t").focus();
      return false;
    }

    if ($(".p2-6:checked").length == "" && $(".p2-6c:checked").length == "") {
      alert("2.6 เมื่อองค์กรของท่านต้องรับพนักงานใหม่ ทักษะของพนักงานด้านใดบ้างที่ท่านต้องการ (เลือกตอบได้มากกว่า 1 ข้อ)");
      $("#p2-6-1").focus();
      return false;
    }

    if ($(".p2-6c:checked").length !== "" && $("#p2-6t").val() == "") {
      alert("2.6 อื่น ๆ ระบุ....)");
      $(".p2-5").focus();
      return false;
    }

  });
});
