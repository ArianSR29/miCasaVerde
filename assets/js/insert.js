$(document).ready(function() {
  //formSendMail
  $('.form-vales').on('submit', function(e) {
    e.preventDefault();
    var nombre = $("#nombre").val();
    var form = $(this);
    $.ajax({
      type: "POST",
      url: './mail/mail.php',
      data: form.serialize(),
      success: function(/*response*/) {
        //alert(response);
        window.location.href = "/LP/gracias.php?nombre="+nombre;
        $('.form-vales input').val('');
      }
    });
  });
  //formSendMail
  $('.form-credito').on('submit', function(e) {
    e.preventDefault();
    var nombreN = $("#nombreN").val();
    var form = $(this);
    $.ajax({
      type: "POST",
      url: './mail/mail-nss.php',
      data: form.serialize(),
      success: function(/*response*/) {
        //alert(response);
        window.location.href = "/LP/gracias.php?nombre="+nombreN;
        $('.form-credito input').val('');
      }
    });
  });
});
