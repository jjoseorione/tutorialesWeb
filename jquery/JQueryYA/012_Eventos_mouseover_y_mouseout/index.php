<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Eventos mouseover y moseout</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Eventos mouseover y moseout</h1>
    <h2>Concepto</h2>
    <p>
        Los eventos de JavaScript onmouseover y onmouseout son los equivalentes de mouseover y mouseout en jQuery. Estos eventos están generalmente unidos. El primero se dispara cuando ingresamos la flecha del mouse a un elemento HTML y el segundo cuando sacamos la flecha del control.
    </p>
    <p>
        Para probar estos dos eventos, implementaremos una página que contenga un botón y cuando se ingrese la flecha del mouse al botón, el mismo se moverá para evitar que se pueda presionar. 
    </p>

    <h2>Ejemplo con métodos onmouseover y onmouseout</h2>

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

    <h2>Ejemplo con métodos on y eventos mouseout y mouseover</h2>
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