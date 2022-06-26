<?php

// recogeremos los datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$mensaje="Este mensaje fue enviado por " , $nombre ,"\rn";
$mensaje="E-mail ", $email, ,"\rn";
$mensaje="Mensaje: ", $_POST ['mensaje'] ,"\rn";
$mensaje="Enviado el ", date['d/m/Y' , time()];

$para = "tomassantiagocueva@gmail.com";
$Asunto = "Este mail fue enviado desde la web";

mail($para,$asunto, utf8_decode($mensaje), $header);

header('Location:gracias.html');
?>