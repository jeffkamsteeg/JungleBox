<?php 
    $destino = "pruebajunglebox@gmail.com";
    $nombre = $_POSt["nombre"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nTelefono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:gracias.html");

?>