<?php
//$conn = new mysqli('mysql.s466.sureserver.com', 'INTOuserMedium', 'INTOcom29', 'gasticom_LP_Registros');
$mysqli = new mysqli('localhost', 'root', '', 'micasaverde');

 $nombre       = @trim(stripslashes($_POST['tb-nombre']));
 $correo       = @trim(stripslashes($_POST['tb-mail']));
 $telefono     = @trim(stripslashes($_POST['tb-tel']));

require_once('class.smtp.php');
require_once('class.pop3.php');
require_once('class.phpmaileroauthgoogle.php');
require_once('class.phpmailer.php');
require_once('PHPMailerAutoload.php');

if(empty($_POST['tb-tel'])) {
  $telefono="No se ingresó teléfono.";
}
$mail = new PHPMailer();
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jaimeisraels.m@gmail.com';                 // SMTP username
$mail->Password = 'sinistersoul22';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                  // TCP port to connect to
$mail -> charSet = "UTF-8";

$mail->setFrom(utf8_decode($correo),utf8_decode($nombre));
$mail->addAddress('jaimeisraels.m@gmail.com');     // Add a recipient


    /*$mail = new PHPMailer;
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.s466.sureserver.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@gasticom.mx';                 // SMTP username
    $mail->Password = '1nf0-gast1c0m';                           // SMTP password
    //$mail->SMTPSecure = false;                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 143;                                  // TCP port to connect to
    $mail -> charSet = "UTF-8";

    $mail->setFrom(utf8_decode($correo),utf8_decode($nombre));
    $mail->addAddress('info@gasticom.mx');     // Add a recipient*/


    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = utf8_decode($nombre). utf8_decode(" quiere calcular su ahorro.");
    $mail->Body    .= utf8_decode("<h3>Mi Casa Verda LP</h3><br><br>Información: <br>");
    $mail->Body    .= 'Nombre: '                 . utf8_decode($nombre) ."<br>";
    $mail->Body    .= 'Correo: '                 . $correo ."<br>";
    $mail->Body    .= utf8_decode("Teléfono: ")  . utf8_decode($telefono) ."<br>";

    $nombre= utf8_decode($nombre);
    $telefono= utf8_decode($telefono);
    $sql = "INSERT INTO  tbcalcular (nombre, correo, telefono) VALUES ('$nombre', '$corrreo', '$telefono')";

    if (mysqli_query( $mysqli , $sql) == TRUE) {

    } else {
        echo "Error INSERTING record: " . $mysqli->error;
    }
    $mysqli->close();
    if(!$mail->send()) {
        echo $nombre.' tus datos no fueron enviados, intentalo de nuevo por favor.';
        echo 'Mail error: ' . $mail->ErrorInfo;
    }
?>
