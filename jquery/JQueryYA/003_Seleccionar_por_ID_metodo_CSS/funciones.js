let doc = jQuery(document);
doc.ready(init);

function init(){
	let titulo1 = jQuery("#titulo1");
	titulo1.click(cambiarTit1);

	let titulo2 = jQuery("#titulo2");
	titulo2.click(cambiarTit2);
}

function cambiarTit1(){
	let titulo1 = jQuery("#titulo1");
	titulo1.css("color", "#333");
	titulo1.css("background-color", "lime");
	titulo1.css("font-family", "sans-serif");
}

function cambiarTit2(){
	let titulo2 = jQuery("#titulo2");
	titulo2.css("color", "navy");
	titulo2.css("background-color", "dodgerblue");
	titulo2.css("font-family", "monospace");
}

