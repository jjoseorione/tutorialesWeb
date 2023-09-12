<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Eventos mouseup y mousedown</h1>
    <h2>Concepto</h2>
    <p>
        El evento mousedown se dispara cuando el puntero se encuentra dentro del elemento HTML y presionamos alguno de los botones del mouse, mientras que el evento mouseup se activa cuando el puntero se encuentra dentro del elemento y el botón del mouse es liberado.
    </p>
    <p>
        Problema: Crear una página que permita arrastrar un elemento por el documento HTML. El elemento debe moverse junto con el puntero al dar clic y dejar de moverse en cuanto el botón sea liberado.
    </p>

    <h2>Ejemplo con métodos mouseup y mosuedown</h2>
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

    <h2>Ejemplo con método on y eventos mouseup y mosuedown</h2>
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

    <h2>Explicación</h2>
    <p>
        Para este ejemplo se utilizan dos funciones principales: activaMovimiento y moverCaja. La primera se activa en cuanto se da clic dentro del elemento #caja y habilita las acciones de la segunda con la variable "movimiento". La segunda se activa al mover el puntero dentro del documento. Se cuenta el movimiento dentro del documento completo, ya que si se contara sólo el movimiento dentro de la caja, puede darse el caso de que el puntero salga de la caja antes de que la caja se mueva, lo cual detendría el movimiento, ya que el puntero dejaría atrás a la caja.
    </p>

    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>