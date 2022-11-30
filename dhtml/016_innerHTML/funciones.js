function crearEnlaces(){
	//Sin innerHTML
	let destino = document.getElementById("div1");
 	let enlace = document.getElementById("text1").value;
 	let nuevo = document.createElement("a");
 	nuevo.setAttribute("href","http://" + enlace);
 	nuevo.appendChild(document.createTextNode("Enlace 1"));
 	destino.appendChild(nuevo);

 	destino.appendChild(document.createElement("br"));

 	enlace = document.getElementById("text2").value;
 	nuevo = document.createElement("a");
 	nuevo.setAttribute("href","http://" + enlace);
 	nuevo.appendChild(document.createTextNode("Enlace 2"));
 	destino.appendChild(nuevo);

 	//Con innerHTML
 	destino = document.getElementById("div2");
 	let enlace1 = document.getElementById("text1").value;
 	let enlace2 = document.getElementById("text2").value;
 	destino.innerHTML += `<a href="http://${enlace1}">Enlace1</a> <br> <a href="http://${enlace2}">Enlace2</a>`;
 	
}