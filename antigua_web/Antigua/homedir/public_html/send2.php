<?php

$nombre = $_POST['Name'];
$mail = $_POST['Email'];
$consulta = $_POST['msj'];
$fono = $_POST['Fono'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Mensaje fue enviado por: " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su Telefono es: " . $fono . " \r\n";
$mensaje .= "Su mensaje es: " . $consulta . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'grupogutti@hotmail.com';
$asunto = 'Solicitud de Franquicia';

mail($para, $asunto, utf8_decode($mensaje), $header);
header ("location: http://www.grupogutti.com/"); 
exit;
?>