function nodosHijos(){
	let bloque = document.getElementById('bloque');
	alert('La cantidad de hijos nodos del nodo div es: ' + bloque.childNodes.length);
	let cadena = "";
	for (let x = 0; x < bloque.childNodes.length; x++){
		if(bloque.childNodes[x].nodeType == Node.TEXT_NODE)
			cadena += "Nodo tipo texto\n";
		if(bloque.childNodes[x].nodeType == Node.ELEMENT_NODE)
			cadena += "Nodo tipo elemento\n";
	}
	alert(cadena);
}

function elementosHijos(){
	alert('La cantidad de elementos hijos es: ' + bloque.children.length)
}