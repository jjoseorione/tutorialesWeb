function insertarParrafo(){
	let entrada = window.prompt("Escribe el nuevo texto");
	let nuevoParrafo = document.createElement('p');
	let nodoTexto = document.createTextNode(entrada);
	nuevoParrafo.appendChild(nodoTexto);
	document.getElementById("parrafos").insertBefore(nuevoParrafo, document.getElementById("p3"));

	console.log(document.getElementById("p3"));
}