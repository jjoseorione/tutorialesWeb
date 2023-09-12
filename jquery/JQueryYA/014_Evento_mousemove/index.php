<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Evento mousemove</h1>
    <h2>Concepto</h2>
    <p>
        Este evento se dispara cuando se mueve la flecha del mouse dentro del elemento HTML respectivo.
    </p>
    <p>
        Si queremos recuperar la coordenada donde se encuentra en ese momento el mouse, jQuery pasa el objeto event como parámetro (con la ventaja que hace transparence las diferencias entre navegadores).
    </p>
    <p>
        <strong>Problema:</strong> Capturar el evento mousemove a nivel del objeto document, el cual se dispara cada vez que desplazamos el mouse dentro de la página. Mostrar la coordenada donde se encuentra la flecha del mouse.
    </p>
    
    <h2>Ejemplo con método mousemove</h2>
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

    <h2>Ejemplo con método on y evento mousemove</h2>
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