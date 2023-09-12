<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Seleccionar por clase</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Seleccionar por clase CSS definida</h1>
    <p>
        Recordemos que en CSS definimos clases cuando una regla de estilo puede ser igual para un conjunto de marcas HTML. Es posible acceder a todos los elementos de una clase con la función JQuery.
    </p>
    <p>
        <strong>Ejemplo:</strong> Mostrar una serie de lenguajes de programación y aplicar un estilo resaltado para aquellos lenguajes que son orientados a objetos. Cuando se presione un botón, agregar la propiedad <em>background-color</em> a todos los elementos de dicha clase.
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

    <p>
        La línea de interés para este ejemplo es <code>jQuery(".resaltado").css("background-color", "dodgerblue");</code>, ya que aquí creamos un objeto jQuery que referencía a todos los elementos con la clase "resaltado". De esta manera, podemos cambiar la propiedad <em>background-color</em> de todos los elementos de dicha clase.
    </p>

    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>