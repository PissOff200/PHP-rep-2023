<?php
session_start();
if (isset($_SESSION['nombreUsuario']) && isset($_POST['comprobarUsuario'])) {
    $comprobarUsuario = $_POST['comprobarUsuario'];
    // Comprobar si el usuario es correcto
    if ($_SESSION['nombreUsuario'] === $comprobarUsuario) {
        echo "¡Bienvenido, $comprobarUsuario !";
    } else {
        echo "Usuario incorrecto.";
    } elseif{
    echo "Por favor, inicia sesión";
}
else {
    echo "Session cerrada"
}
}
session_destroy();