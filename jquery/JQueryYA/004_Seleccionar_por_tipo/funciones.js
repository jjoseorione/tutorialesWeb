$(document).ready(inicializarEventos);

function inicializarEventos(){
	$("tr").click(clicFila);	//Le asigna la funcion clicFila a todos los tr
}

function clicFila(){
	$(this).css("background-color", "#aaa");		//this hace referencia al elemento html que disparó el evento
}