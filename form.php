<?php

$nombre = $_POST["name"];
$mail = $_POST["email"];
$servicio = $_POST["subject"];
$mensaje = $_POST["textarea"];

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje = "Su e-mail es: " . $mail . ",\r\n";
$mensaje = "Servicio seleccionado: " . $servicio . ",\r\n";
$mensaje = "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$mensaje = "Enviado el " . date("d/m/y", time());

$destinatario = 'gilbertojmendozaf@gmail.com';
$asunto = 'Prueba Reflecta Vidrieria'

// funcion mail

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

// redireccion al haber enviado el form
header('Location:index.html');