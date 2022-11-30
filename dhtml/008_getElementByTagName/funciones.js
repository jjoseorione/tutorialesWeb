function puntoFinalParrafo(){
	let lista = document.getElementsByTagName('p');
	/*for(let i = 0; i < lista.length; i++){
		//lista[i].innerHTML += ".";
		lista[i].firstChild.nodeValue += ".";
	}*/
	for(let elemento of lista)
		//elemento.innerHTML += ".";
		elemento.firstChild.nodeValue += ".";

	document.getElementById("boton").disabled = true;
	document.getElementById("boton").title = "Ya has agregado el punto final";
}