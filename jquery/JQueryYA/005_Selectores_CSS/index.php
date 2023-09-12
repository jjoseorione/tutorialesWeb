<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Selectores CSS</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body style="font-family: sans-serif;">
    <h1>Modificar elementos utilizando los selectores CSS</h1>
    <p>
        Una característica importante de jQuery es poder obtener la referencia de elementos del DOM utilizando para ellos selectores de CSS. 
    </p>
    <p>
        El primer problema que dispondremos será ocultar todos list item de una lista no ordenada. En el ejemplo habrá dos listas, por lo que no será posible disponer de todos los elementos con etiqueta list item con el selector <code>$("li")</code>, ya que eso aplicaría a todos los elementos <strong>li</strong> del documento, pero sólo queremos aplicarlo a una lista.
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
        Se puede apreciar de primera mano que existen dos botones: uno para ocultar toda la lista1, y otro que oculta sólo los elementos li de la lista1. Esto se logra utilizando el combinador descendiente (espacio) el cual combina dos selectores para tomar todos los elementos li descendientes de #lista1.
    </p>
    <p>
        Luego, para ocultar los elementos se utiliza la función <code>hide()</code>, la cual modifica el atributo CSS <em>display</em> a su valor <em>none</em>;
    </p>

    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>