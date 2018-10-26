<?php    

    $nombre = ($_POST['tb-nombre']);
    $correo = ($_POST['tb-mail']);
    $telefono = ($_POST['tb-tel']);

    require_once('class.smtp.php');
    require_once('class.pop3.php');
    require_once('class.phpmaileroauthgoogle.php');
    require_once('class.phpmailer.php');
    require_once('PHPMailerAutoload.php');

    $mail = new PHPMailer;
    $mail->SMTPDebug  = 2;
    //$mail->isSMTP();                                         // Set mailer to use SMTP
    $mail->Host = 'md-33.webhostbox.net';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                  // Enable SMTP authentication
    $mail->Username = 'info@micasaverde.mx';                 // SMTP username
    $mail->Password = 'L1sc4no!!tatiana';                       // SMTP password
    $mail->SMTPSecure = ssl;                            // Enable TLS encryption, 'ssl' also accepted
    $mail->Port = 465;                                       // TCP port to connect to
    $mail -> charSet = "UTF-8";


    $mail->setFrom(utf8_decode($correo),utf8_decode($nombre));
    $mail->addAddress('info@micasaverde.mx');                 // Add a recipient
    $mail->isHTML(true);
    
    // Set email format to HTML
    $mail->Subject = utf8_decode($nombre). utf8_decode(" quiere calcular su ahorro.");
    $mail->Body    .= utf8_decode("<h3>Mi Casa Verde LP</h3><br>Información: <br>");
    $mail->Body    .= '<strong>Nombre: </strong>'. utf8_decode($nombre) ."<br>";
    $mail->Body    .= '<strong>Correo: </strong>'. $correo ."<br>";
    $mail->Body    .= utf8_decode("<strong>Teléfono: </strong>")  . utf8_decode($telefono) ."<br>";
    if(!$mail->send()) {
        echo $nombre.' tus datos no fueron enviados, intentalo de nuevo por favor.';
        echo 'Mail error: ' . $mail->ErrorInfo;
    }
     $servername = "199.79.62.12";
     $username = "micasdm2_INTOusr";
     $password = "INTOverde29";
     $dbname = "micasdm2_micasaverde";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo ("Error conexión base de datos" . mysqli_connect_error());
    }
    $sql = "INSERT INTO calcularinfo (nombre, correo, telefono, fecha) VALUES ('$nombre', '$correo', '$telefono', CURDATE())";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
