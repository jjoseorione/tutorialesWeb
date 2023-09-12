<!DOCTYPE html>
<html>
<head>
    <style>
        code{
            font-size: 1.2em;
            color: #aaa;
            background-color: #008;
        }
        body{
            font-family: sans-serif;
            font-size: 1.2em;
            background-color: #222;
            color: #ddd;
            padding: 0 5em;
        }
        pre{
            font-size: 1.2em;
            color: #aaa;
            background-color: #008;
            padding: 2px 4px;
            white-space: pre;
            overflow-x: auto;
        }
        a{
            color: #48F;
            text-decoration: none;
            font-weight: bold;
        }
        a.button{
            background-color: #48F;
            color: #222;
            padding: 0.5em;
            margin: 2em 0;
            border: 1px solid #aaa;
        }
        a.button:hover{
            background-color: #222;
            color: #48F;
        }
        blockquote{
            margin-top: 2em;
            margin-bottom: 2em;
        }
    </style>
    <meta charset='utf-8'>
    <title>Introducción - La función $</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body style="font-family: sans-serif;">
    <h1>Forma de programar JavaScript con JQuery</h1>

    <p>
        JQuery debe verse como una tecnología diferente, ya que si tratamos de aplicar de manera forzosa los conceptos que sabemos de JavaScript a JQuery, podemos tener problemas.
    </p>
    <p>
        Como primer ejemplo veamos el caso en el que debemos capturar el evento de un control HTML de tipo button. Primero veamos cómo sería este problema con Javascript:
    </p>

    <blockquote>
        <h3>pagina1.html</h3>
        <pre><?php
            $code = fopen("./pagina1.html", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
        
        <a class="button" href="./pagina1.html" target="blank">pagina1.html</a>
    </blockquote>

    <h2>Solución con JavaScript</h2>

    <blockquote>
        <h3>pagina2.html</h3>
        <pre><?php
            $code = fopen("./pagina2.html", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
    </blockquote>

    <blockquote>
        <h3>funciones1.js</h3>
        <pre><?php
            $code = fopen("./funciones1.js", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
    </blockquote>

    <h2>Solución con JQuery</h2>

    <blockquote>
        <h3>pagina3.html</h3>
        <pre><?php
            $code = fopen("./pagina3.html", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
    </blockquote>

    <blockquote>
        <h3>funciones2.js</h3>
        <pre><?php
            $code = fopen("./funciones2.js", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
    </blockquote>

    <p>
        En la pagina3 primero importamos la biblioteca con un CDN. Ésta línea debe aparecer antes de cualquier archivo .js que utilice la biblioteca. 
    </p>

    <p>
        En el archivo funciones2.js comienza el uso de JQuery. La función principal de esta biblioteca es la funcion $. A la función $ se le pueden enviar distintos valores. En la primera llamada del ejemplo le estamos pasando la referencia del objeto <em>document</em> del DOM y en la segunda el id del control button.
    </p>
    <p>
        El primer método que nos interesa de esta clase es el <em>ready</em>. El método <em>ready</em> tiene como parámetro un nombre de función. Esta función se ejecutará cuando todos los elementos de la página estén cargados. Es importante notar que sólo pasamos el nomnre de la función y no disponemos de los paréntesis.
    </p>
    <p>
        Luego, en la función inicializarEventos utilizamos nuevamente la función $ para crear un objeto de la clase JQuery, pero ahora asociándolo al botón. Esto es realizado pasando el id del button, precedido por el carácter # y entre comillas. Finalmente se llama al método click, pasando como parámetro el nombre de la función que se ejecutará al presionar dicho botón
    </p>

    <p>
        Nota importante, actualmente también puede utilizarse la funnción <em>jQuery</em> como equivalente a $. Por ejemplo, en lugar de realizar <code>let x = $(document);</code> puede realizarse <code>let x = jQuery(document);</code>. En adelante se alternarán ambas formas para acostumbrarse a ambas.
</code>
</code>
    </p>


    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>