function nodosHijos(){
	let bloque = document.getElementById('bloque');
	alert('La cantidad de hijos nodos del nodo div es: ' + bloque.childNodes.length);
	let cadena = "";
	for (let x = 0; x < bloque.childNodes.length; x++){
		if(bloque.childNodes[x].nodeType == Node.TEXT_NODE)
			cadena += "Nodo tipo texto: " + bloque.childNodes[x] + "\n";
		if(bloque.childNodes[x].nodeType == Node.ELEMENT_NODE)
			cadena += "Nodo tipo elemento: " + bloque.childNodes[x] + "\n";
	}
	alert(cadena);
}

function elementosHijos(){
	alert('La cantidad de elementos hijos es: ' + bloque.children.length);
	let cadena = "";
	for (let x = 0; x < bloque.children.length; x++)
		cadena += "Nodo: " + bloque.children[x] + "\n";
	alert(cadena);
}