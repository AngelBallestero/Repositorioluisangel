<?php
include_once("conexion.php");

# Recibir datos del formulario
$nombre = $_POST['nombre'];

$sql = "DELETE FROM contactos WHERE nombre=:nombre";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR); 

try {
    $stmt->execute();
    echo "<script>alert ('contacto eliminado exitosamente.')</script>";
    header('Location: listaeliminar.php');
} catch (PDOException $e) {
    echo "Error al eliminar usuario: " . $e->getMessage();
}
?>