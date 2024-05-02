<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA de Contactos</title>
</head>
<body>
    <h1>LISTA de Contactos</h1>
    
    <!-- Formulario para agregar un nuevo contacto -->
    <h2>Agregar Contacto</h2>
    <form action="crear_contacto.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre del contacto" required>
        <br/>
        <input type="tel" name="telefono" placeholder="Número de telefono" required>
        <br/>
        <input type="email" name="correo" placeholder="Correo" required>
        <br/>
        <input type="submit" value="Agregar Contacto"></input>
    </form>
   
</body>
</html>
