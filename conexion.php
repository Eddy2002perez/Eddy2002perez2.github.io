<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recordatorio";

// Crear una conexión a la base de datos
$db = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($db->connect_error) {
    die("Error en la conexión a la base de datos: " . $db->connect_error);
}


// esto no debe ir aqui, muevele a otro archivo, aqui solo degbe ir la conexion para poder reusarla en los demas archivos
// Obtener los datos enviados desde el formulario HTML
// $nombre = $_POST['nombre'];
// $email = $_POST['email'];

// // Insertar los datos en la base de datos
// $sql = "INSERT INTO tabla (nombre, email) VALUES ('$nombre', '$email')";
// if ($conn->query($sql) === TRUE) {
//     echo "Datos guardados correctamente";
// } else {
//     echo "Error al guardar los datos: " . $conn->error;
// }

// // Cerrar la conexión a la base de datos
// $conn->close();
?>