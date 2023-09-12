<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Seleccionar por tipo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body style="font-family: sans-serif;">
    <h1>Seleccionar elementos por tipo</h1>
    <p>
        La sintaxis para tener la referencia de todos los elementos de cierto tipo de etiquera es <code>$("etiqueta_del_elemento")</code>.
    </p>
    <p>
        Es decir, es casi igual que obtener la referencia de un elemento en particular meidnante el ID. Sólo difiere en que no le antecedemos el carácter #. Con esto podemos definir funciones comunes para un mismo tipo de elementos.
    </p>
    <p>
        <strong>Problema:</strong> Confeccionar una tabla con 5 filas. Hacer que cambie el color de la fila que se presiona con el mouse. Obtener la referencia a todos los elementos <strong>tr</strong>.
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
            $code = fopen("./funciones.js", "r");
            while (!feof($code)){
                $line = htmlentities(fgets($code));
                echo $line;
            }
            fclose($code);
        ?></pre>
    </blockquote>

    <p>
        En la función inicializarEventos asignamos la función clicFila al evento click de todos los elementos de tipo <em>tr</em>.
    </p>

    <p>
        Posteriormente, la función clicFila utiliza el selector this, el cual referencía al elemento particular que disparó el evento.
    </p>


    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>