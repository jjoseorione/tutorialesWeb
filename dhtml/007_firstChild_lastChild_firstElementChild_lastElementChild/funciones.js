function primerHijo(padre){
	let hijo = document.getElementById(padre).firstChild;
	alertHijo(hijo);
}

function ultimoHijo(padre){
	let hijo = document.getElementById(padre).lastChild;
	alertHijo(hijo);
}

function primerElementoHijo(padre){
	let hijo = document.getElementById(padre).firstElementChild;
	alertHijo(hijo);
}

function ultimoElementoHijo(padre){
	let hijo = document.getElementById(padre).lastElementChild;
	alertHijo(hijo);
}

function alertHijo(hijo){
	if (hijo.nodeType == Node.ELEMENT_NODE)
		alert("Nodo tipo elemento. Contenido: '" + hijo.firstChild.nodeValue + "'");
	else
		alert("Nodo tipo texto: '" + hijo.nodeValue + "'");
}