function arbol(id){
	let padre = document.getElementById(id).parentNode;
	for(let i=0; i<padre.childNodes.length; i++){
		identificaTipoHijo(padre.childNodes[i])
	}
}

function proximoNodoHermano(){
	alert("Nodo actual: Segundo párrafo");
	let pnh = document.getElementById('parrafo2').nextSibling;
	if (pnh.nodeType == Node.ELEMENT_NODE) 
		alert("Siguiente nodo: Elemento tipo nodo. Contenido: " + pnh.childNodes[0].nodeValue);
	else
		alert("Siguiente nodo: Elemento tipo texto. Contenido: " + pnh.nodeValue);
}

function anteriorNodoHermano(){
	alert("Nodo actual: Segundo párrafo");
	let anh = document.getElementById('parrafo2').previousSibling;
	if(anh.nodeType == Node.ELEMENT_NODE) 
		alert("Anterior nodo: Elemento tipo nodo. Contenido: " + anh.childNodes[0].nodeValue);
	else
		alert("Anterior nodo: Elemento tipo texto. Contenido: " + anh.nodeValue);
}

function proximoElementoHermano(){
	alert("Nodo actual: Segundo párrafo");
	let peh = document.getElementById('parrafo2').nextElementSibling;
	alert("Siguiente elemento. Contenido: " + peh.childNodes[0].nodeValue);
}

function anteriorElementoHermano(){
	alert("Nodo actual: Segundo párrafo");
	let aeh = document.getElementById('parrafo2').previousElementSibling;
	alert("Anterior elemento. Contenido: " + aeh.childNodes[0].nodeValue);
}

function identificaTipoHijo(hijo){
	if(hijo.nodeType == Node.ELEMENT_NODE)
		alert("Nodo anterior de tipo elemento. Contenido: " + hijo.childNodes[0].nodeValue);
	else{
		let contenido = hijo.nodeValue.split(" ");
		for(let i = 0; i < contenido.length; i++){

		}
		alert("Nodo anterior de tipo texto. Contenido: " + hijo.childNodes[0].nodeValue);
	}
}