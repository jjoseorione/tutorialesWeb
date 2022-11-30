<?php
    include "../lib.php";

    //SE EVALUA LA SESIÓN
    session_start();
    if(isset($_SESSION['loged']))
        header("Location: ./site");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Login</h1>
    <form action="validaLogin.php" method="post">
        <div>
            Usuario:
            <input type="email" name="correo" autocomplete="off" required>
        </div>
        <div>
            Contraseña:
            <input type="password" name="contrasena" required>
        </div>
        <p>
            <input type="submit" name="Enviar">
        </p>
    </form>

    <div><a href="../"><button>Volver</button></a></div>
</body>
</html>