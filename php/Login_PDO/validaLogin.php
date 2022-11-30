<?php
    include "../lib.php";

    //SE EVALUA LA SESIÓN
    session_start();
    if($_SESSION['loged'])
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
    <?php
        //--------CONEXIÓN---------

        try{                                                            //Va dentro de un bloque try por si falla la conexión (se lanza una excepción)
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $dbname = "tutoriales";
            $user = "root";
            $password = "";
            $dsn = "mysql:host=localhost;dbname=$dbname";               //gestor_de_bd:host=$host;dbname=$dbname
            $pdo = new PDO($dsn, $user, $password);                //se crea el objeto pdo (la conexión)
        } catch(PDOException $e){
            echo $e->getMessage();
        }

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);    //Se especifica el modo en que se devuelven los datos (fetch) por default. El estilo de fetch puede especificarse por default, como en este caso; por objeto pdo de la forma $stmt->setFetchMode(PDO::FETCH_ASSOC) o en cada consulta usando fetch(PDO::FETCH_*)



        //--------CONSULTA---------
        $qry = "SELECT * FROM usuarios WHERE correo = :correo";
        $stmt = $pdo->prepare($qry);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $rows = $stmt->fetch();
        $count = $stmt->rowCount();
        if($count == 1){
            if($rows['contrasena'] == $contrasena){
                session_start();
                $_SESSION['idUser'] = $rows['idUser'];
                $_SESSION['nombre'] = $rows['nombre'];
                $_SESSION['correo'] = $rows['correo'];
                $_SESSION['loged'] = true;
                header("Location: ./site");
            }
            else
                echo("<h2>La contraseña es incorrecta. Favor de intentar nuevamente</h2>");
        }
        else
            echo("<h2>Correo no registrado. Favor de intentar nuevamente</h2>");
    ?>

    <div><a href="./"><button>Volver</button></a></div>
</body>
</html>