<!--
    La clase PDOStatement es la que trata las sentencias SQL. Una instancia de PDOStatement se crea cuando se llama a PDO->prepare(), y con ese objeto creado se llama a métodos como bindParam() para pasar valores o execute() para ejecutar sentencias. PDO facilita el uso de sentencias preparadas en PHP, que mejoran el rendimiento y la seguridad de la aplicación. Cuando se obtienen, insertan o actualizan datos, el esquema es: PREPARE -> [BIND] -> EXECUTE. Se pueden indicar los parámetros en la sentencia con un interrogante "?" o mediante un nombre específico.


-->

<?php
    include "../lib.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ejemplo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
    <?php
        try{
            $dbname = "tutoriales";
            $dsn = "mysql:host=localhost;dbname=$dbname";
            $user = "root";
            $password = "";
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            );
            $conexion = new PDO($dsn, $user, $password, $options);
            echo "Conexión exitosa<br>";
        } catch(PDOException $e){
            echo $e->getMessage();
        }

        impPar("Limpiando base...");
        $qry = "DELETE FROM pdo_tutorial";
        if($conexion->query($qry))
            impPar("Base limpiada con éxito");
        else
            impPar("Error al limpiar la base");


        //Bind usando interrogantes-----------------------------
        //Prepare
        $qry = "INSERT INTO pdo_tutorial VALUES(?, ?, ?)";
        $stmt = $conexion->prepare($qry);

        //Bind
        $id = 1;
        $nombre = "Francisco";
        $momento = date('Y-m-d H:i:s');
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $nombre);
        $stmt->bindParam(3, $momento);
        //Execute
        if($stmt->execute())
            impPar("Se agregó el usuario #$id $nombre");
        else
            impPar("Error al agregar usuario #$id $nombre");

        //Bind
        $id = 2;
        $nombre = "Martha";
        $momento = date('Y-m-d H:i:s');
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $nombre);
        $stmt->bindParam(3, $momento);
        //Execute
        if($stmt->execute())
            impPar("Se agregó el usuario #$id $nombre");
        else
            impPar("Error al agregar usuario #$id $nombre");

        //Bind
        $id = 3;
        $nombre = "Sofía";
        $momento = date('Y-m-d H:i:s');
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $nombre);
        $stmt->bindParam(3, $momento);
        //Execute
        if($stmt->execute())
            impPar("Se agregó el usuario #$id $nombre");
        else
            impPar("Error al agregar usuario #$id $nombre");

        
        //Bind usando variables-----------------------------------
        //Prepare
        $qry = "INSERT INTO pdo_tutorial VALUES(:id, :nombre, :momento)";
        $stmt = $conexion->prepare($qry);

        //Bind
        $id = 4;
        $nombre = "Alma";
        $momento = date('Y-m-d H:i:s');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':momento', $momento);
        //Execute
        if($stmt->execute())
            impPar("Se agregó el usuario #$id $nombre");
        else
            impPar("Error al agregar usuario #$id $nombre");

        //Bind
        $id = 5;
        $nombre = "Rodrigo";
        $momento = date('Y-m-d H:i:s');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':momento', $momento);
        //Execute
        if($stmt->execute())
            impPar("Se agregó el usuario #$id $nombre");
        else
            impPar("Error al agregar usuario #$id $nombre");

        //Bind
        $id = 6;
        $nombre = "Luisa";
        $momento = date('Y-m-d H:i:s');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':momento', $momento);
        //Execute
        if($stmt->execute())
            impPar("Se agregó el usuario #$id $nombre");
        else
            impPar("Error al agregar usuario #$id $nombre");

        $conexion = NULL; 




    ?>

    <div style="margin-top: 3em;"><a href="./">Volver</a></div>
</body>
</html>

<!--
    Diferencia entre bindParam() y bindValue()
    Existen dos métodos para enlazar valores: bindParam() y bindValue():

    Con bindParam() la variable es enlazada como una referencia y sólo será evaluada cuando se llame a execute():

        // Prepare:
        $stmt = $dbh->prepare("INSERT INTO Clientes (nombre) VALUES (:nombre)");
        $nombre = "Morgan";
        // Bind
        $stmt->bindParam(':nombre', $nombre); // Se enlaza a la variable $nombre
        // Si ahora cambiamos el valor de $nombre:
        $nombre = "John";
        $stmt->execute(); // Se insertará el cliente con el nombre John

    Con bindValue() se enlaza el valor de la variable y permanece hasta execute():
        
        // Prepare:
        $stmt = $dbh->prepare("INSERT INTO Clientes (nombre) VALUES (:nombre)");
        $nombre = "Morgan";
        // Bind
        $stmt->bindValue(':nombre', $nombre); // Se enlaza al valor Morgan
        // Si ahora cambiamos el valor de $nombre:
        $nombre = "John";
        $stmt->execute(); // Se insertará el cliente con el nombre Morgan

    En la práctica bindValue() se suele usar cuando se tienen que insertar datos sólo una vez, y bindParam() cuando se tienen que pasar datos múltiples (desde un array por ejemplo).

    Ambas funciones aceptan un tercer parámetro, que define el tipo de dato que se espera. Los data types más utilizados son: PDO::PARAM_BOOL (booleano), PDO::PARAM_NULL (null), PDO::PARAM_INT (integer) y PDO::PARAM_STR (string).
-->