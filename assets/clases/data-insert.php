<?php 
	$nombre=$_POST['tb-nombre'];
	$corrreo=$_POST['tb-mail'];
	$telefono=$_POST['tb-tel'];

    

    
    $mysqli = new mysqli('localhost', 'root', 'root', 'micasaverde');

    $sql = "INSERT INTO  tbcalcular (nombre, correo, telefono) VALUES ('$nombre', '$corrreo', '$telefono')";
    
    if (mysqli_query( $mysqli , $sql) == TRUE) {
        echo "<script> alert('INSERT CORRECTO')</script>";
    } else {
        echo "Error INSERTING record: " . $mysqli->error;
    }
    
    $mysqli->close();
    
    echo "mi nombre es " . $nombre;
    echo "mi correo es " . $cooreo;
    echo "mi telefono es " . $telefono;

    ?>