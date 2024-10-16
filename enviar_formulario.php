<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];

    $destinatario = "lucaisgro27@gmail.com"; 

   
    $asunto = "Nuevo mensaje de contacto de Bamba clothes";

    $cuerpo = "Has recibido un nuevo mensaje de contacto.\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    $headers = "From: $email";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
