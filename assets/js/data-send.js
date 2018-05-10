$(document).ready(function () {
		$('#btn-calcular2').on("click",function(){
         alert("11");
            var datos=$('#form-calcular2').serialize();
         alert("21");
			$.ajax({
				url: "assets/clases/data-insert.php",
                type:"POST",
                data: datos,
                beforeSend: function (data) {
                     console.log();
                     $("#res").html("Procesando, espere por favor...");
                 },
				success:function(r){
                    if(r==1){
                        console.log(data)
                        alert("agregado con exito");
					}else{
                        alert("Fallo el server");
					}
				}
			});
			return false;
		});
    // $('#btn-calcular2').on("click",function () {
    //     alert("2");
    //         var url = "data-insert.php";
    //     alert("3");
    //         $.ajax({
    //             url: url,
    //             type: "POST",
    //             data: $("#form-calcular2").serialize(),
    //             beforeSend: function () {
    //                 $("#res").html("Procesando, espere por favor...");
    //             },
    //             success: function (data) {
    //                 $('#res').html(data);
    //                 location.reload();
    //             }
    //         });
    //     });
    //     console.log("Entrasete a Calcular 2")

    });
