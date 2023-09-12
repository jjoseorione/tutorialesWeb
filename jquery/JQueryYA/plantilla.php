<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    
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