$(document).ready(function () {
    $('#btn-calcular2').on("click", function () {
        var datos = $('#form-calcular2').serialize();
        $.ajax({
            //url: "assets/clases/data-insert.php",
            url: "assets/libs/mail/mail.php",
            type: "POST",
            data: datos,
            beforeSend: function (data, url) {
                console.log("Procesando, espere por favor...");
                //$("#res").html("Procesando, espere por favor...");
            },
            success: function (data) {
                if (data == 1) {
                    alert("Fallo el server");
                } else {
                  $('#form-calcular2 input').val('');
                    alert("Tus datos han sido enviados correctamente");
                }
            }
        });
        return false;
    });
});
