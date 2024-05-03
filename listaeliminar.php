<?php

include_once("conexion.php");


$sql = "SELECT * FROM contactos";
$stmt = $conexion->query($sql);
$contactos = $stmt->fetchAll(PDO::FETCH_ASSOC);


$conexion = null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilistareliminar.css">
    <title>LISTA de eliminados</title>
</head>
<center>
<body>

    <h1>lista de usuarios por eliminados</h1>
    <div class="container" >
     <table center>
        <tr>
            <th>nombre</th>
            <th>telefono</th>
            <th>correo</th>
        </tr>
        <?php foreach ($contactos as $contacto): ?>
        <tr>
            <td><?php echo $contacto['nombre']; ?></td>
            <td><?php echo $contacto['telefono']; ?></td>
            <td><?php echo $contacto['correo']; ?></td>
        </tr>
        <?php endforeach; ?>
     </table>
        </div>
</body>
<center>
</html>

    <a href="Eliminars.php">eliminar otro contacto</a>     
    <br/>
    <a href="Actualizar.php">Actualizar otro contacto</a>
    <br/>
    <a href="Registrar.php">Atras</a>  
     
    
