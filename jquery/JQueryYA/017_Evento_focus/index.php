<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Evento focus</h1>
    <h2>Concepto</h2>
    <p>
        El evento se produce cuando se enfoca un control. Podemos capturar el evento focus de un control de tipo text, textarea, button, checkbox, password, radio, submit, etc.
    </p>
    <p>
        <strong>Problema:</strong> Capturar el evento focus de un textarea para que borre su contenido y pueda escribirse dentro de él. 
    </p>
    
    <h2>Ejemplo con método focus</h2>
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

    <h2>Ejemplo con método on y evento focus</h2>
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