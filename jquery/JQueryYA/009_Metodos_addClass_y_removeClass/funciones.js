$(document).ready(init);

function init(){
	$("#boton1").click(agregaQuitaClase);
}

function agregaQuitaClase(){
	let div = $("#texto");
	let boton = $("#boton1");
	console.log("-----------------------------")
	console.log("Antes: " + div.attr("class"));
	if(div.attr("class")){
		div.removeClass("claseTexto");
		boton.text("Agregar Clase");
	}
	else{
		div.addClass("claseTexto");
		boton.text("Remover Clase");
	}
	console.log("Despues: " + div.attr("class"));
}