<?php

# Conexión a la base de datos utilizando PDO
include_once("conexion.php");

# Recibir datos del formulario
$nombre = $_POST['nombre'];
$username = $_POST['username'];
$passwords = $_POST['passwords'];

# Insertar nuevo contacto en la base de datos
$sql = "INSERT INTO usuarios (nombre, username, passwords) VALUES (:nombre, :username, :passwords)";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$stmt->bindParam(':username',$username, PDO::PARAM_STR);
$stmt->bindParam(':passwords', $passwords, PDO::PARAM_STR);

try {
    $stmt->execute();
    echo "<script>alert ('usuario agregado exitosamente.')</script>";
    # Redireccionar a la página listar contactos para ver los contactos después de agregarlo
    header('Location: listarusuarios.php');
} catch (PDOException $e) {
    echo "Error al agregar contacto: " . $e->getMessage();
}
?>
