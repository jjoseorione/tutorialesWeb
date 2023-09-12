<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Método html</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Métodos html() y html(valor)</h1>
    <p>
        El método <code>html("bloque_html")</code> nos permite agregar un bloque de código HTML a partir de un elemento de la página.
    </p>
    <p>
        Por otro lado, el método <code>html()</code> retorna el bloque de HTML contenido por elemento que llama el método.
    </p>
    <p>
        De manera simple, puede verse que ambos tienen relación con la propiedad innerHTML del DOM, ya que el primer método modifica esta propiedad y el segundo obtiene su valor.
    </p>
    <p>
        <strong>Problema: </strong> Crear una página que contenga un botón que al ser presionado muestre un formulario y que al presionar otro, el formulario se elimine. Utilizar las funciones html() y html(valor).
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