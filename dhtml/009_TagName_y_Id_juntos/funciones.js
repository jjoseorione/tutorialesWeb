function puntoFinal(){
	parrafos = document.getElementById("bloque2").getElementsByTagName("p");
	for (parrafo of parrafos)
		parrafo.firstChild.nodeValue += ".";
	document.getElementById("boton").title = "Ya has agregado el punto final";
	document.getElementById("boton").disabled = true;
}