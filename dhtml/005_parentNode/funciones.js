function cambiaColorDiv(id){
	padre = document.getElementById(id).parentNode;
	if(padre.style.backgroundColor != 'blue')
		padre.style.backgroundColor = "blue";
	else
		padre.style.backgroundColor = "";
}