<?php

include_once("conexion.php");


$sql = "SELECT * FROM usuarios";
$stmt = $conexion->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);


$conexion = null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA de usuarios</title>
</head>
<body>
   
    <h1>usuario Registrados</h1>
    <table>
        <tr>
            <th>nombre</th>
            <th>username</th>
            <th>passwords</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario['nombre']; ?></td>
            <td><?php echo $usuario['username']; ?></td>
            <td><?php echo $usuario['passwords']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br/>
    <a href="index.php">Atras</a> 
  
    
   
       


</body>
</html>
