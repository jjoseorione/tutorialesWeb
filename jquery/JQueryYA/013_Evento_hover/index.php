<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Evento hover</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Evento hover</h1>

    <h2>Concepto</h2>
    <p>
        JQuery no sólo mapea los eventos del DOM, sino que provee otros que combinan éstos. Es habitual utilizar los eventos mouseover y mouseout en conjunto, por eso en jQuery existe un evento llamado hover que tiene dos parámetros:
    </p>
    <p>
        Con método hover:
        <code>
            $(elemento).hover(funcion_1, funcion_2)
        </code>
    </p>
    <p>
        Con método on y evento hover:
        <code>
            $(elemento).on("hover", funcion_1, funcion_2)
        </code>
    </p>
    <p>
        En el segmento de código, funcion_1 es la función que se ejecuta cuando el mouse está dentro del elemento, mientras que función_2 se ejecuta cuando el mouse está fuera del elemento.
    </p>
    <p>
        <strong>Problema:</strong> Realizar una página que contenga un botón que al poner encima el mouse despliegue un conjunto de botones.
    </p>

    <h2>Ejemplo con método hover()</h2>
    
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

    <h3>funciones1.js</h3>
    <blockquote>
        <pre><?php
            $code = fopen("./funciones1.js", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
    </blockquote>


    <h2>Ejemplo con método on() y evento hover</h2>

    <h3>pagina2.html</h3>
    <blockquote>
        <pre><?php
            $code = fopen("./pagina2.html", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>

        <a href="./pagina2.html" class="button" target="_blank">pagina2.html</a>
    </blockquote>

    <h3>funciones2.js</h3>
    <blockquote>
        <pre><?php
            $code = fopen("./funciones2.js", "r");
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