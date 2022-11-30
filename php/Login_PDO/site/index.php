<?php
    include "../../lib.php";

    //SE EVALUA LA SESIÓN
    session_start();
    if(!$_SESSION['loged'])
        header("Location: ../");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h2>Sesión iniciada con éxito.</h2>
    <h3>Hola <?=$_SESSION['nombre']?></h3>

    <div><a href="./logout.php"><button>Cerrar Sesión</button></a></div>
</body>
</html>