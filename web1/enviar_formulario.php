<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes agregar tu lógica para procesar el formulario,
    // como enviar el correo electrónico o guardar los datos en una base de datos.
    // En este ejemplo, simplemente mostraremos los datos enviados:

    echo "<h2>Información enviada:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Asunto:</strong> $asunto</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
}
?>
