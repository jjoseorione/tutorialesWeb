function agregarElem(){
	//Agrega un nodo de tipo elemento al final del nodo padre
	let texto = window.prompt("Escribe el texto que se debe agregar:");
	if(texto){
		let nuevoTexto = document.createTextNode(texto);
		let nuevoParrafo = document.createElement("p");
		nuevoParrafo.appendChild(nuevoTexto);
		document.getElementById("parrafos").appendChild(nuevoParrafo);
	}
	else
		alert("Oh pues >:(");
}

function eliminarUltimoElem(){
	//Elimina el último elemento del nodo padre
	let padre = document.getElementById("parrafos");
	if(padre.hasChildNodes())
		padre.removeChild(padre.lastChild);
	else
		alert("Nostas biendo ke ya no ai ijos");
}

function eliminarPrimerElem(){
	//Elimina el último elemento del nodo padre
	let padre = document.getElementById("parrafos");
	if(padre.hasChildNodes())
		padre.removeChild(padre.firstChild);
	else
		alert("Nostas biendo ke ya no ai ijos");
}