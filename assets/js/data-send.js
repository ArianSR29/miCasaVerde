$(document).ready(function () {
    $('#form-calcular-movil').on("submit", function () {
        var datos = $('#form-calcular-movil').serialize();
        var nombre = $('.nombre').val();
        $.ajax({
            url: "assets/libs/mail/mail.php",
            type: "POST",
            data: datos,
            beforeSend: function (datos, data) {
                console.log("Procesando");
                console.log(datos);
                console.log(data);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            },
            success: function () {
                window.location.href = "assets/temps/gracias.php?nombre=" + nombre;
            }
        });
        return false;
    });


    $('#form-info-movil').on("submit", function () {
        var datos = $('#form-info-movil').serialize();
        var nombre = $('.nombre-info-movil').val();
        $.ajax({
            url: "assets/libs/mail/mail.php",
            type: "POST",
            data: datos,
            beforeSend: function (datos, data) {
                console.log("Procesando");
                console.log(datos);
                console.log(data);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            },
            success: function () {
                window.location.href = "assets/temps/gracias.php?nombre=" + nombre;
            }
        });
        return false;
    });

    $('#form-calcular-desktop').on("submit", function () {
        var datos = $('#form-calcular-desktop').serialize();
        var nombre = $('.nombre-calcular-desktop').val();
        $.ajax({
            url: "assets/libs/mail/mail.php",
            type: "POST",
            data: datos,
            beforeSend: function (datos, data) {
                console.log("Procesando");
                console.log(datos);
                console.log(data);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            },
            success: function () {
                window.location.href = "assets/temps/gracias.php?nombre=" + nombre;
            }
        });
        return false;
    });

    $('#form-info-desktop').on("submit", function () {
        var datos = $('#form-info-desktop').serialize();
        var nombre = $('.nombre-info-desktop').val();
        $.ajax({
            url: "assets/libs/mail/mail.php",
            type: "POST",
            data: datos,
            beforeSend: function (datos, data) {
                console.log("Procesando");
                console.log(datos);
                console.log(data);
            },
            error: function() {
                console.log("No se ha podido obtener la información");
            },
            success: function () {
                window.location.href = "assets/temps/gracias.php?nombre=" + nombre;
            }
        });
        return false;
    });
});
