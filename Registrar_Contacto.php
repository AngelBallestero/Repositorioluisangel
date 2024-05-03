<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloscontactos.css">
    <title>LISTA de Contactos</title>
</head>
<center>
<body>

    <h2>Agregar Contacto</h2>
    <form action="crear_contacto.php" method="POST" class="form">
        <input type="text" name="nombre" placeholder="Nombre del contacto" required>
        <br/>
        <input type="text" name="telefono" placeholder="Número de telefono" required>
        <br/>
        <input type="text" name="correo" placeholder="Correo" required>
        <br/>
        <input type="submit" value="Agregar Contacto"></input>
    </form>
   
</body>
<center>
</html>
