<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes agregar la lógica para procesar el formulario, como enviar correos electrónicos, almacenar en una base de datos, etc.

    // Por ejemplo, para enviar un correo electrónico (requiere configuración del servidor de correo):
    $destinatario = "jaguilar@serconfinconsultores.com";
    $cabeceras = "from: $nombre <$destinatario>" . "\r\n";
    mail($destinatario, $asunto, $mensaje, $cabeceras);

    echo "¡Gracias por tu mensaje!";
}