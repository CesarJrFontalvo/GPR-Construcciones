<?php


//Llamado a los campos 

$nombre = $_POST['name'];
$correo= $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

// Datos para el correo
$destinatario = 'juniorfontalvo5@gmail.com';

$carta = "De: $nombre \n" ;// falta agregar el salto de linea 
$carta .= "Correo: $correo  \n" ;
$carta .= "Mensaje: $mensaje \n";

// Envio de mensaje
mail($destinatario, $asunto, $carta);
//header('location:index.html')


?>