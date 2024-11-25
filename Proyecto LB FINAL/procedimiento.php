<?php
// Conexión a la base de datos
$servername = "localhost";  // Nombre del servidor
$username = "root";         // Nombre de usuario
$password = "";             // Contraseña
$dbname = "proyectolb"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$contraseña = $_POST['contaseña'];

// Preparar la consulta SQL
$sql = "INSERT INTO `tab_registro` (`nombre`, `apellido`, `dni`, `direccion`, `celular`, `email`, `contraseña`) 
VALUES ('$nombre','$apellido','$dni', '$direccion', '$celular', '$email','$contraseña')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>