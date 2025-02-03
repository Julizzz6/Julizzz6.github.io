<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Aquí puedes hacer lo que necesites con los datos, como guardarlos en una base de datos o enviar un correo electrónico.
    
    // Ejemplo: enviar un correo electrónico
    $to = "juligam463@gmail.com"; // Cambia esto por tu dirección de correo
    $subject = "Nuevo mensaje de San Valentín";
    $message = "Nombre: $nombre\nEmail: $email";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redirigir a la página de agradecimiento
        header("Location: gracias.html");
        exit();
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>