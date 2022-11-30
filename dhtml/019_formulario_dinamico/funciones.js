function preguntarCuantos(){
	let formulario = document.getElementById('formulario');
	let select = document.getElementById('hijos');
	if (select.options[select.selectedIndex].value == '1'){
		var p1 = document.createElement('p');
		p1.setAttribute('id', 'p1');
		p1.innerHTML = "¿Cuántos, bro? <input type=\"number\" id=\"cantidadHijos\" name=\"cantidadHijos\" min=\"1\" onblur=\"resultado()\">";
		formulario.appendChild(p1);
	}
	else if (p1 = document.getElementById('p1'))
		formulario.removeChild(p1);
}

function resultado(){
	let select = document.getElementById('hijos');
	let cantidadHijos = document.getElementById('cantidadHijos');
	if (select.options[select.selectedIndex].value == '1' && cantidadHijos.value >= 1){
		if(p2 = document.getElementById('p2')){
			if (cantidadHijos.value <= 6)
				p2.innerText = "Ok, gracias.";
			else if(cantidadHijos.value <= 12)
				p2.innerText = "Salv nmms.";
			else if(cantidadHijos.value <= 20)
				p2.innerText = "¿Es neta, bro?";
			else if(cantidadHijos.value > 20)
				p2.innerText = "Che mentiroso.";
		}
		else{
			var formulario = document.getElementById('formulario');
			var p2 = document.createElement('p');
			p2.setAttribute('id', 'p2');
			if (cantidadHijos.value <= 6)
				p2.innerText = "Ok, gracias.";
			else if(cantidadHijos.value <= 12)
				p2.innerText = "Salv nmms.";
			else if(cantidadHijos.value <= 20)
				p2.innerText = "¿Es neta, bro?";
			else if(cantidadHijos.value > 20)
				p2.innerText = "Che mentiroso.";
			formulario.appendChild(p2);
		}
		

	}

}