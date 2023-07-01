let x = $(document);       //Crea un objeto de tipo JQuery
x.ready(inicializarEventos);    //Ready ejecuta inicializarEventos función cuando x está completamente cargado

function inicializarEventos() {
  let x = $("#boton1");    //x es un objeto JQuery referenciado al #boton1
  x.click(presionBoton);        //La función click ejecuta presionBoton cuando se presiona x
}

function presionBoton() {
  alert("Se presionó el botón");
}