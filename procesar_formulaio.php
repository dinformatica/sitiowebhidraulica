<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo Electrónico: " . $email . "<br>";
    echo "Teléfono: " . $telefono . "<br>";
    echo "Mensaje: " . $mensaje;
}
?>
