<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Método text</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Métodos text() y text(valor)</h1>
    <p>
        Para saber el contenido de un elemento, el objeto jQuery cuenta con el método text(). Por ejemplo: <code>$("#parrafo1").text()</code> devuelve el texto del párrafo con id igual a parrafo1.
    </p>
    <p>
        De igual forma es posible cambiar el texto del párrafo al usar un argumento de la siguiente manera: <code>$("#parrafo1").text("Éste es el texto nuevo")</code>.
    </p>
    <p>
        <strong>Problema:</strong> Realizar una página HTML que muestre una tabla de 6x6 para realizar un horario de clases. Las celdas que indiquen el día y la hora serán fijas y mostrarán el texto en una alerta al dar clic. El resto de celdas deberán ser editables para poder agregar contenido. También se podrá agregar una descripción al horario e un párrafo al inicio.
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
        Para la solución de este problema se utilizaron tres clases y un id. El id descripción nos sirve para asignar el método editarDescripcion al párrafo inicial con un evento clic. Dentro del método utilizamos la función prompt para obtener la descripción y posteriormente la asignamos al contenido del párrafo. Ocurre lo mismo para la función editarMateria, sólo que en este caso asignamos la función con ayuda de la clase materia.
    </p>
    <p>
        Por último, las clases hora y dia ejecutan ambos la función mostrarTexto, la cual sólo genera una alerta con el texto contenido por la celda seleccionada.
    </p>

    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>