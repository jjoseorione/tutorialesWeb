<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../styles.css">
    <meta charset='utf-8'>
    <title>Eventos en JQuery</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Administración de eventos con JQuery</h1>
    <p>
        jQuery facilita la administración de eventos de JavaScript y nos hace transparente la diferencia en el registro de eventos entre distintos navegadores (IExplorer, FireFox, Chrome, Safari, Opera).
    </p>
    <p>
        En este tutorial ya hemos utilizado el manejador de eventos. La función <em>ready</em>, por ejemplo, se ejcuta cuando el DOM del documento están en memoria. Si no utilizamos la biblioteca jQuery, esto se realiza a través del evento addEventListener.
    </p>
    <p>
        Otro evento que se ha visto en este curso es el evento clic, el cual utilizamos con el método <em>click</em> y sirve para asignar una función que será ejecutada al hacer clic en el elemento asignado.
    </p>
    <p>
        En adelante se verán otros eventos que pueden manipularse con la ayuda de JQuery.
    </p>
    <h3>IMPORTANTE</h3>
    <p>
        Los métodos que se verán en las siguientes lecciones están obsoletos desde la versión 3.3.0 lanzada a inicio de 2018 donde se sustituyeron todos por el método <code>on(nombre_evento, funcion)</code>, donde nombre_evento es el nombre de evento y funcion es la función que se disparará con dicho evento. Sin embargo, se cubren para efector de completitud del curso, ya que aún pueden encontrarse en alguna páginas.
    </p>
    <p>
        Por ejemplo, la función <code>click(funcion)</code> (actualmente obsoleta) ha sido cambiada por <code>on("click", funcion)</code>.
    </p>

    <div style="margin: 3em 0;"><a href="../" class="button">Volver</a></div>
</body>
</html>