function color(id){
	celda = document.getElementById("c"+id+"");
	if (id<=3 && id>0) {
		celda.style.backgroundColor="#dfadde";
	}else if (id<=8 && id>3) {
		celda.style.backgroundColor="#dfadde";
	}
}
function colorout(id){
	celda = document.getElementById("c"+id+"");
	if (id<=3 && id>0) {
		celda.style.backgroundColor="#fffcec";
	}else if (id<=8 && id>3) {
		celda.style.backgroundColor=blue;
	}
}