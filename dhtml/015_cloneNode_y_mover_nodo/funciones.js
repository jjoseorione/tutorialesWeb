function copiarUltimo(origen, destino){
	let ori = document.getElementById(origen);
	let error;
	try{
		console.log(ori.lastElementChild.tagName);
		let nuevo = ori.lastElementChild.cloneNode(true);
		let des = document.getElementById(destino);
		des.appendChild(nuevo);
	}
	catch(error){
		alert("La lista no tiene nodos");
	}
}

function moverUltimo(origen, destino){
	let ori = document.getElementById(origen);
	try{
		let des = document.getElementById(destino);
		des.appendChild(ori.lastElementChild);
	}
	catch(error){
		alert("La lista no tiene nodos");
	}
}