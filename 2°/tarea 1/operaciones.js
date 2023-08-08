function cal1(){
	var a = document.getElementById("amigos").value;
	var b = document.getElementById("entradas").value;
	var c = 0;
	var tot = 0;
	var x1 = 0;
	var x2 = 0;
	var x3 = 0;
	if(a == ""){
		alert("faltan los amigos");
		document.getElementById("amigos").focus();
		return false;
	}else{
		if(b == ""){
			alert("faltan las entradas");
			document.getElementById("entradas").focus();
			return false;
		}else{
			c = a-b;
			x1 = a;
			x2 = b;
			x3 = c;
			for(var i=a-1; i >= 1; i--){
				x1 = x1*i;
			}
			for(var i=b-1; i >= 1; i--){
				x2 = x2*i;
			}
			for(var i=c-1; i >= 1; i--){
				x3 = x3*i;
			}
			tot = (x1 / (x2 *x3))
			alert("Resultado: "+tot);
		}
	}
}
function cal2(){
	var a = document.getElementById("alumnos").value;
	var b = document.getElementById("grupo").value;
	var c = 0;
	var tot = 0;
	var x1 = 0;
	var x2 = 0;
	var x3 = 0;
	if(a == ""){
		alert("faltan los alumnos");
		document.getElementById("alumnos").focus();
		return false;
	}else{
		if(b == ""){
			alert("falta el grupo ");
			document.getElementById("grupo").focus();
			return false;
		}else{
			c = a-b;
			x1 = a;
			x2 = b;
			x3 = c;
			for(var i=a-1; i >= 1; i--){
				x1 = x1*i;
			}
			for(var i=b-1; i >= 1; i--){
				x2 = x2*i;
			}
			for(var i=c-1; i >= 1; i--){
				x3 = x3*i;
			}
			tot = (x1 / (x2 *x3))
			alert("Resultado: "+tot);
		}
	}
}
function cal3(){
	var a = 5;
	var b = document.getElementById("vocales").value;
	var x1 = 0;
	var tot = 0; 
	if(a == ""){
		alert("falta el grupo");
		document.getElementById("vocales").focus();
		return false;
	}else{
		x1 = b;
		for (var i = 4;i >= 1; i--){
			a = a*i;
		}
		for (var i = b-1; i >= 1; i--) {
			x1 = x1*i;
		}
		tot = (a / x1);
		alert("Resultao: "+tot);
		return true;
	}
}
function cal4(){
	var a = document.getElementById("quimica").value;
	var b = document.getElementById("fisica").value;
	var c = document.getElementById("biologia").value;
	var x1 = 0;
	var tot = 0;
	if(a == ""){
		alert("faltan los de quimica");
		document.getElementById("quimica").focus();
		return false;
	}else{
		if(b == ""){
			alert("faltan los de fisica");
			document.getElementById("fisica").focus();
			return false;
		}else{
			if(c == ""){
				alert("faltan los de biologia");
				document.getElementById("biologia").focus();
				return false;
			}else{
				x1 = parseInt(a) + parseInt(b) + parseInt(c);
				tot = x1;
				for (var i = x1-1; i >= 1; i--) {
					tot = tot*i;
				}
				alert("Resultado: "+tot);
				return true;
			}
		}
	}
}
function cal5(){
	var a = document.getElementById("a").value;
	var b = document.getElementById("b").value;
	var c = document.getElementById("c").value;
	var x1 = 0;
	var x2 = 0;
	var tot = 0;
	var ex = 0;
	if(a == ""){
		alert("falta a");
		document.getElementById("a").focus();
		return false;
	}else{
		if(b == ""){
			alert("falta b");
			document.getElementById("b").focus();
			return false;
		}else{
			if(c == ""){
				alert("falta c");
				document.getElementById("c").focus();
				return false;
			}else{
				ex = b*b-4*a*c;
				if (ex>0){
					x1=(-b + Math.sqrt(ex)) / (2 * a);
					x2=(-b - Math.sqrt(ex)) / (2 * a);
					alert("Los resultados son: x1: "+x1+" x2: "+x2);
					return true;
				}else{
					alert("La operacion no es posible");
					return false;
				}
			}
		}
	}
}