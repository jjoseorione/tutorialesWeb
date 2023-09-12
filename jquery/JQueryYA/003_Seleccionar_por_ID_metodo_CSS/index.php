<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Selección por ID</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body style="font-family: sans-serif;">
    
    <h1>Selección de un elemento del documento mediante el id</h1>

    <p>
        La sintaxis para seleccionar un elemento particular de la página mediante la propiedad ID es: <code>jQuery("#nombre_del_id");</code>.
    </p>
    <p>
        Confeccionaremos un problema para ver cómo obternemos la referencia a elementos HTML particulares mediante el id.
    </p>
    <p>
        <strong>Problema:</strong> Confeccionar una página que muestre dos títulos de primer nivel y al ser presionados, cambiar la fuente, fondo y color del texto.
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
        <a href="./pagina1.html" class="button">pagina1.html</a>
    </blockquote>

    <h3>funciones.js</h3>
    <blockquote>
        <pre><?php
            $code = fopen("./pagina1.html", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
    </blockquote>

    <p>
        Será costumbre que siempre que se trabaje con esta biblioteca, como primer paso deberemos crear un objeto jQuery apartir de la referencia <em>document</em>, y luego llamamos al método ready indicándole el nombre de la función que debe ejecutarse luego de generarse el árbol de elementos HTML para la página.
    </p>
    <p>
        La función inicializarEventos se ejecuta una vez que se cargó la página y están creados todos los elementos HTML; en esta función creamos objetos JQuery a partir del ID de los elementos h1. A cada uno se le asigna un evento click que ejecuta una función diferente para cada uno. Es importante notar que cuando referenciamos por medio de ID se antecede el carácter <em>#</em>.
    </p>
    <p>
        Por último, el método <em>css</em> nos permite modificar una propiedad de la hoja de estilo de un elemento HTML por medio de un formato clave-valor. También se puede obtener el valor actual si se omite el segundo argumento y sólo se envía el primero.
    </p>

    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>