<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Dirección de tu correo electrónico
    $to = "melisadimarco1@gmail.com";  // Cambia esto por tu correo
    $subject = "Nuevo mensaje de contacto";
    
    // El contenido del correo
    $body = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
    
    // Enviar el correo
    if (mail($to, $subject, $body)) {
        echo "Gracias, tu mensaje ha sido enviado.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>