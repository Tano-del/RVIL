<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];

    // Dirección de correo a la que se enviarán los mensajes
    $destinatario = "lucaisgro27@gmail.com"; 

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto de Bamba clothes";

    // Cuerpo del correo
    $cuerpo = "Has recibido un nuevo mensaje de contacto.\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Encabezados del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>