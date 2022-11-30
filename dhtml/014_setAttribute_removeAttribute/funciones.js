function creaLink(direccion, nombre){
	let bloque = document.getElementById("bloque");
	if(bloque.hasChildNodes()){
		//bloque.removeChild(bloque.lastChild);
		link = document.getElementById("enlace");
		link.firstChild.nodeValue = nombre;
	}
	else{
		link = document.createElement("a");
		link.appendChild(document.createTextNode(nombre));
	}
	link.setAttribute("href", direccion);
	link.setAttribute("id", "enlace");
	bloque.appendChild(link);
}

function quitarVinculo(){
	let bloque = document.getElementById("bloque");
	if(bloque.hasChildNodes()){
		link = document.getElementById("enlace");
		if(link.hasAttribute("href")){
			direccion = link.getAttribute("href");
			link.removeAttribute("href");
			alert("Se ha quitado el vínculo a la dirección " + direccion);
		}
		else
			alert("No hay vínculo, cainal");
	}
	else
		alert("No hay vínculo, cainal");
}