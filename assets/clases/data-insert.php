<?php
	$nombre=$_POST['tb-nombre'];
	$corrreo=$_POST['tb-mail'];
	$telefono=$_POST['tb-tel'];

    $mysqli = new mysqli('localhost', 'root', 'root', 'micasaverde');
    $sql = "INSERT INTO  tbcalcular (nombre, correo, telefono) VALUES ('$nombre', '$corrreo', '$telefono')";
    require_once '../libs/mail/mail.php';    
    if(mysqli_query( $mysqli , $sql) == TRUE) {
        echo "CORRECTO";
        require_once '../libs/mail/mail.php';
    }else {
        echo "Error INSERTING record: " . $mysqli->error;
    }
    $mysqli->close();
    ?>
