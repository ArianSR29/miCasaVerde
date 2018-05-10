$(document).ready(function () {
    $('#btn-calcular2').on("click", function () {
        var datos = $('#form-calcular2',).serialize();
        $.ajax({
            //url: "assets/clases/data-insert.php",
            url: "assets/libs/mail/mail.php",
            type: "POST",
            data: datos,
            beforeSend: function () {
                console.log("Procesando, espere por favor...");
                //$("#res").html("Procesando, espere por favor...");

            },
            success: function () {
                window.location.href = "assets/temps/gracias.php";
            }
        });
        return false;
    });
    // -----------------------------------------------------------------------------------------------------------
    $('#btn-calcular').on("click", function () {
        var datos = $('#form-calcular',).serialize();
        $.ajax({
            url: "assets/clases/data-insert.php",
            type: "POST",
            data: datos,
            beforeSend: function (data, url) {
                console.log("Procesando, espere por favor...");
                //$("#res").html("Procesando, espere por favor...");
            },
            success: function () {
                window.location.href = "assets/temps/gracias.php";
            }
        });
        return false;
    });
    // --------------------------------------------------------------------------------------------------------
    $('#btn-info').on("click", function () {
        var datos = $('#form-info',).serialize();
        $.ajax({
            url: "assets/clases/data-insert-inf.php",
            type: "POST",
            data: datos,
            beforeSend: function (data, url) {
                console.log("Procesando, espere por favor...");
                //$("#res").html("Procesando, espere por favor...");
            },
            success: function () {
                window.location.href = "assets/temps/gracias.php";
            }
        });
        return false;
    });
});
