<!--
    La consulta de datos se realiza mediante PDOStatement::fetch, que obtiene la siguiente fila de un conjunto de resultados. Antes de llamar a fetch (o durante) hay que especificar como se quieren devolver los datos.

    PDO::FETCH_ASSOC: devuelve un array indexado cuyos keys son el nombre de las columnas.
    PDO::FETCH_NUM: devuelve un array indexado cuyos keys son números.
    PDO::FETCH_BOTH: valor por defecto. Devuelve un array indexado cuyos keys son tanto el nombre de las columnas como números.
    PDO::FETCH_BOUND: asigna los valores de las columnas a las variables establecidas con el método PDOStatement::bindColumn.
    PDO::FETCH_CLASS: asigna los valores de las columnas a propiedades de una clase. Creará las propiedades si éstas no existen.
    PDO::FETCH_INTO: actualiza una instancia existente de una clase.
    PDO::FETCH_OBJ: devuelve un objeto anónimo con nombres de propiedades que corresponden a las columnas.
    PDO::FETCH_LAZY: combina PDO::FETCH_BOTH y PDO::FETCH_OBJ, creando los nombres de las propiedades del objeto tal como se accedieron.

    Los más utilizados son FETCH_ASSOC, FETCH_OBJ, FETCH_BOUND y FETCH_CLASS. Vamos a poner un ejemplo de los dos primeros:
-->

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
        } catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }

        $qry = "SELECT * FROM pdo_tutorial";

        //SELECT con FETCH_ASSOC. 
        $consulta = $conexion->query($qry);
        //Se debe esécificar el tipo de fetch antes de llamar a fetch()
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        echo "<h2>SELECT con FETCH_ASSOC</h2>";
        while($filas = $consulta->fetch()){
            impPar("
                <div>Id: $filas[id]</div>
                <div>Usuario: $filas[usuario]</div>
                <div>Momento: $filas[momento]</div>");
        }

        //SELECT con FETCH_OBJ. 
        //$consulta = $conexion->query($qry); No es necesario repetir la consulta, ya que es la misma
        //Se debe esécificar el tipo de fetch antes de llamar a fetch()
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        echo "<h2>SELECT con FETCH_OBJ</h2>";
        while($filas = $consulta->fetch()){
            impPar("
                <div>Id: $filas->id</div>
                <div>Usuario: $filas->usuario</div>
                <div>Momento: $filas->momento</div>");
        }








        $conexion = NULL;







    ?>

    

    <div><a href="./"><button>Volver</button></a></div>
</body>
</html>