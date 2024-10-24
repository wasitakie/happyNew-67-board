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

    if ($(".p2-4:checked").length == "") {
      alert("2.4 สถานภาพสมรส");
      $("#P2-4-1").focus();
      return false;
    }

    if ($("#p2-5t").val() == "") {
      alert("2.5 ท่านมีบุตรหรือไม่ (รวมลูกบุญธรรม/ ลูกติด/ ลูกเลี้ยง)");
      $(".p2-5t").focus();
      return false;
    }

  });
});
