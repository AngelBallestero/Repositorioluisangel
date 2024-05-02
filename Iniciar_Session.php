<?php
include_once("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnIniciar'])) {
   
    $username = $_POST['username'];
    $passwords = $_POST['passwords'];

    
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE username = :username AND passwords = :passwords");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR); 
    $stmt->bindParam(':passwords', $passwords, PDO::PARAM_STR);
    $stmt->execute();

   
    if ($stmt->rowCount() > 0) {
        
        session_start();
        echo "Hola " . $username;
        header('Location: listar_contactos.php');
        exit;
    } else {
        echo "No Hay Nigun Usuario Con Estos Datos";
    }
} 
?>
<br/>
 <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redireccionar con PHP</title>
    </head>
    <body>
        <button onclick="redirectToPage()">Registrar Usuario</button>
    
        <script>
            function redirectToPage() {
                window.location.href = "Registrar.php";
            }
        </script>
    </body>
    </html>
