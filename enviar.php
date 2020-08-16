<<?php 

$destino = "a.r.sistemsas@gmail.com";
$website = $_post["website"];
$nombre = $_post["nombre"];
$email = $_post["email"];
$telefono = $_post["telefono"];
$mensaje = $_post["mensaje"];
$contenido = "nombre: " . $nombre . "\nCorreo: " . $email . "\nTelefono: " . $telefono . "\nWebsite: " . $website . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:gracias.html");


?>
