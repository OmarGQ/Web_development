function calrect(){
	var alto = document.getElementById("realto").value;
	var ancho = document.getElementById("reancho").value;
	var tot = 0;
	if(alto == ""){
		alert("falta colocar altura");
		document.getElementById("realto").focus();
		return false;
	}else{
		if(ancho == ""){
			alert("falta colocar la ancho");
			document.getElementById("reancho").focus();
			return false;
		}else{
			tot=(ancho * alto)
			alert("Area: " + tot);
			return true;
		}
	}
}
function calcua(){
	var lado = document.getElementById("lado").value;
	var tot = 0;
	if(lado == ""){
		alert("falta colocar el lado");
		document.getElementById("lado").focus();
		return false;
	}else{
		tot=(lado*lado)
		alert("Area: " + tot);
		return true;
	}
}
function paracal(){
	var alto = document.getElementById("palto").value;
	var ancho = document.getElementById("pancho").value;
	var tot = 0;
	if(alto == ""){
		alert("falta colocar altura");
		document.getElementById("palto").focus();
		return false;
	}else{
		if(ancho == ""){
			alert("falta colocar la ancho");
			document.getElementById("pancho").focus();
			return false;
		}else{
			tot=(ancho * alto)
			alert("Area: " + tot);
			return true;
		}
	}
}
function tri(){
	var alto = document.getElementById("tralto").value;
	var ancho = document.getElementById("trancho").value;
	var tot = 0;
	if(alto == ""){
		alert("falta colocar altura");
		document.getElementById("tralto").focus();
		return false;
	}else{
		if(ancho == ""){
			alert("falta colocar la ancho");
			document.getElementById("trancho").focus();
			return false;
		}else{
			tot=(ancho * alto)/2
			alert("Area: " + tot);
			return true;
		}
	}
}
function tra(){
	var alto = document.getElementById("trpalto").value;
	var ancho = document.getElementById("trpancho").value;
	var ancho2 = document.getElementById("trpancho2").value;
	var tot = 0;
	if(alto == ""){
		alert("falta colocar altura");
		document.getElementById("trpalto").focus();
		return false;
	}else{
		if(ancho == ""){
			alert("falta colocar la ancho");
			document.getElementById("trpancho").focus();
			return false;
		}else{
			if(ancho2 == ""){
			alert("falta colocar la ancho");
			document.getElementById("trpancho2").focus();
			return false;
			}else{
				tot=((ancho * ancho2)/2)*alto
				alert("Area: " + tot);
				return true;
			}	
		}
	}
}
function pol(){
	var alto = document.getElementById("perimetro").value;
	var ancho = document.getElementById("radio").value;
	var tot = 0;
	if(alto == ""){
		alert("falta colocar el perimetro");
		document.getElementById("perimetro").focus();
		return false;
	}else{
		if(ancho == ""){
			alert("falta colocar el radio");
			document.getElementById("radio").focus();
			return false;
		}else{
			tot=(alto * ancho)/2
			alert("Area: " + tot);
			return true;
		}
	}
}