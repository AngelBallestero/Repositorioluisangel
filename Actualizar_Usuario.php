<?php

include_once("conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "UPDATE contactos SET telefono=:telefono, correo=:correo where nombre=:nombre ";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$stmt->bindParam(':telefono',$telefono, PDO::PARAM_STR);
$stmt->bindParam(':correo', $correo, PDO::PARAM_STR);

try {
    $stmt->execute();
    echo "Contacto Actualizado exitosamente";
    header('Location: listar_contactos.php');
} catch (PDOException $e) {
    echo "Error al Actualizar contacto: " . $e->getMessage();
}