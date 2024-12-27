<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Dirección de destino
    $destino = "frenemuye@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto";

    // Cuerpo del correo
    $cuerpo = "Has recibido un nuevo mensaje desde tu formulario de contacto:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar correo
    if (mail($destino, $asunto, $cuerpo, $headers)) {
        echo "<p>Mensaje enviado exitosamente. Gracias por contactarnos.</p>";
    } else {
        echo "<p>Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.</p>";
    }
} else {
    echo "<p>Acceso no autorizado.</p>";
}
?>
