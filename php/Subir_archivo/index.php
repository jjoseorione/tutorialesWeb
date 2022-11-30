<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="action.php" method="post" enctype="multipart/form-data">
        <div>
            Nombre del archivo: <input type="text" name="nombre">
        </div>
        <div>
            Archivo a subir: <input type="file" name="foto">
        </div>
        <div><input type="submit" value="Enviar"></div>
    </form>
    <div><a href="../"><button>Volver</button></a></div>
</body>
</html>