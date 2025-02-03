<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'juligam463@gmail.com';
$asunto = 'Mensaje de Mi Novia Hermosa';

email($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");





?>