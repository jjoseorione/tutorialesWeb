function cambiaColorDiv(){
	padre = document.getElementById('parrafo1').parentNode;
	if(padre.style.backgroundColor != 'blue')
		padre.style.backgroundColor = "blue";
	else
		padre.style.backgroundColor = "white";
}