function todosLosParrafos(){
	let parrafo = document.getElementById('parrafo1');
	while(parrafo != null){
		if(parrafo.nodeType == Node.ELEMENT_NODE)
			alert("Nodo tipo Elemento. Contenido: " + parrafo.childNodes[0].nodeValue);
		else
			alert("Nodo tipo texto. Contenido: " + parrafo.nodeValue);
		parrafo = parrafo.nextSibling;
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