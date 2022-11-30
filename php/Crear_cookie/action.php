<?php
    include "../lib.php";

    //La cookie debe asignarse antes de imprimir cualquier HTML
    if(isset($_POST['fondo'])){
        if($_POST['fondo'] != "ninguno")
            setcookie("background", $_POST['fondo'], time() + (60 * 60 * 5));
        else
            setcookie("background", "", time() - (60 * 60 * 5));
        header("Refresh:0");
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body <?php if(isset($_COOKIE['background'])) echo "style=\"background-color:$_COOKIE[background]\""; ?> >
    <div>
        Se ha actualizado correctamente el color de fondo. 
    </div>

    <div><a href="./"><button>Volver</button></a></div>
</body>
</html>