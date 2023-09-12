<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Métodos attr y removeAttr</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Métodos attr(propiedad), attr(propiedad, valor) y removeAttr(propiedad)</h1>

    <p>
        Los métodos attr y removeAttr interactuan con las propiedades de los elementos HTML.
    </p>
    <p>
        El método attr(propiedad) nos ayuda a recuperar el valor de una propiedad en un elemento html. Por ejemplo, si se tiene el elemento <code>&lt;elemento propiedad="valor"&gt;</code>, el valor de la propiedad se puede obtener de la forma <code>$(elemento).attr("propiedad")</code>.
    </p>
    <p>
        El método attr(propiedad, valor) es útil para asignar a una propiedad el valor deseado.
    </p>
    <p>
        Por último, removeAttr(propiedad) sirve para remover la propiedad deseada de algún elemento html.
    </p>
    <p>
        <strong>Problema:</strong> crear una página que contenga una tabla y 3 botones. El primer botón será para modificar el estilo de la tabla, el segundo para obtenerlo y el tercero para eliminarlo.
    </p>

    
    <h3>pagina1.html</h3>
    <blockquote>
        <pre><?php
            $code = fopen("./pagina1.html", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>

        <a href="./pagina1.html" class="button" target="_blank">pagina1.html</a>
    </blockquote>

    <h3>funciones.js</h3>
    <blockquote>
        <pre><?php
            $code = fopen("./funciones.js", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
    </blockquote>

    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>