<?php
    include "../lib.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body <?php if(isset($_COOKIE['background'])) echo "style=\"background-color:$_COOKIE[background]\""; ?> >
    <form action="action.php" method="post">
        <div>Seleccione el color de fondo</div>
        <select name="fondo">
            <option value="#FFAAAA">Rojo</option>
            <option value="#AAFFAA">Verde</option>
            <option value="#AAAAFF">Azul</option>
            <option value="ninguno">Ninguno</option>
        </select>
        <input type ="submit" value="Enviar">
    </form>

    <div><a href="../"><button>Volver</button></a></div>
</body>
</html>