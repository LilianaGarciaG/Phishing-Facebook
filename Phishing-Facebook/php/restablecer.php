<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Aquí se simula el envío de un enlace de restablecimiento de contraseña
    // No se hará nada más para no avanzar en el proceso
    echo "<script>alert('Se ha enviado un enlace para restablecer la contraseña a su correo electrónico.'); window.location.href='../main.html';</script>";
}
?>
