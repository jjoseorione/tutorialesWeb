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
<body>
    <?php
        //$_FILE es un arreglo de archivos donde la fila es el nombre del input del archivo subido y la columna es algún dato de dicho archivo.
        impPar($_FILES['foto']['tmp_name']);    //nombre del archivo temporal
        impPar($_FILES['foto']['name']);        //nombre original con el que se subió la imagen
        impPar($_FILES['foto']['type']);        //tipo y extensión de archivo separado por una diagonal
        impPar($_FILES['foto']['size']);        //tamaño en bytes del fichero recibido.



        $tipo = explode('/', $_FILES['foto']['type']);
        if(!$tipo[0] == 'image')
            exit();
        $nombre = date('YmdHis') . "." . $tipo[1];
        if(copy($_FILES['foto']['tmp_name'], $nombre)){
            impPar("La foto se registro en el servidor con el nombre $nombre");
        }
        
        echo "<img src=\"$nombre\">";

    ?>

    <div><a href="./"><button>Volver</button></a></div>
</body>
</html>