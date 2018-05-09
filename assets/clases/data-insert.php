<?php 

// Host: 199.79.62.12 
// Nombre de base de datos: micasdm2_micasalp1
// user: lw_user
// password: intolwusr
//tabla: tb-calcular

    $nombre = $_POST['tb-nombre'];
    $correo  = $_POST['tb-correo'];
    $telefono  = $_POST['tb-tel'];

    echo "tu usuario es: ".$nombre; 
    echo "correo es: ".$correo;
    echo "telefono es: ".$telefono;


?>