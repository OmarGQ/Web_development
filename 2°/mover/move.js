//declarar variables
var pos = 0;
console.log("Width: " + screen.width);
console.log("Height: " + screen.height);

//declarar funcion
function mueveIz(){
	if (pos<screen.width-60) {
		pos += 10;
		//desplazar a la izquierda
		document.getElementById("imagen").style.left = pos + "px";
	}else{
		console.log("Ya no camino we!")
	}
}

function mueveDr(){
	if (pos > 0) {
		pos -= 10;
		//desplazar a la derecha
		document.getElementById("imagen").style.left = pos + "px";
	}
}

function automatico(){
	
		setInterval(mueveIz, 50);
	
}