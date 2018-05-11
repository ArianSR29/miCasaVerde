<?php
//$conn = new mysqli('mysql.s466.sureserver.com', 'INTOuserMedium', 'INTOcom29', 'gasticom_LP_Registros');
//$mysqli = new mysqli('localhost', 'root', 'root', 'micasaverde');

 $nombre       = @trim(stripslashes($_POST['tb-nombre']));
 $correo       = @trim(stripslashes($_POST['tb-mail']));
 $telefono     = @trim(stripslashes($_POST['tb-tel']));

require_once('class.smtp.php');
require_once('class.pop3.php');
require_once('class.phpmaileroauthgoogle.php');
require_once('class.phpmailer.php');
require_once('PHPMailerAutoload.php');

/*$mail = new PHPMailer();
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jaimeisraels.m@gmail.com';                 // SMTP username
$mail->Password = '*****';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                  // TCP port to connect to
$mail -> charSet = "UTF-8";

$mail->setFrom(utf8_decode($correo),utf8_decode($nombre));
$mail->addAddress('jaimeisraels.m@gmail.com');     // Add a recipient*/


    $mail = new PHPMailer;
    $mail->isSMTP();                                         // Set mailer to use SMTP
    $mail->Host = 'box594.bluehost.com ';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                  // Enable SMTP authentication
    $mail->Username = 'info@micasaverde.mx';                 // SMTP username
    $mail->Password = 'Darkhorse03!2';                       // SMTP password
    $mail->SMTPSecure = ssl;                                 // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                       // TCP port to connect to
    $mail -> charSet = "UTF-8";

    $mail->setFrom(utf8_decode($correo),utf8_decode($nombre));
    $mail->addAddress('info@micasaverde.mx');                 // Add a recipient

    $mail->isHTML(true);                                     // Set email format to HTML

    $mail->Subject = utf8_decode($nombre). utf8_decode(" quiere calcular su ahorro.");
    $mail->Body    .= utf8_decode("<h3>Mi Casa Verde LP</h3><br>Información: <br>");
    $mail->Body    .= '<strong>Nombre: </strong>'                 . utf8_decode($nombre) ."<br>";
    $mail->Body    .= '<strong>Correo: </strong>'                 . $correo ."<br>";
    $mail->Body    .= utf8_decode("<strong>Teléfono: </strong>")  . utf8_decode($telefono) ."<br>";
    $nombre= utf8_decode($nombre);
    $telefono= utf8_decode($telefono);
    if(!$mail->send()) {
        echo $nombre.' tus datos no fueron enviados, intentalo de nuevo por favor.';
        echo 'Mail error: ' . $mail->ErrorInfo;
    }

?>
