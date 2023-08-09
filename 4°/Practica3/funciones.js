var dia = "Lunes";
var d = 0;
var banPlus = false;
var Mesas;
var reservas;
var mesaActual = 0;
var i =0;
var dat = [
	{
		"Mesa": "mesa1",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa2",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa3",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa4",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa5",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa6",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa7",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa8",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa9",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa10",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa11",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa12",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa13",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa14",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa15",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa16",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa17",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa18",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa19",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	},
	{
		"Mesa": "mesa20",
		"nombre": "",
		"cantidad": 0,
		"hi1": 1,
		"hi2": 0,
		"hf1": 0,
		"hf2": 0
	}
]
function loadDoc() {
	time = new Date(); 
	hora = time.getHours();
	min = time.getMinutes();
	seg = time.getSeconds();
	random = (hora * min)/seg;
	document.getElementById("diaS").innerHTML=dia;
  	const xhttp = new XMLHttpRequest();
  	xhttp.open('GET', 'json/mesas.json?'+random+'', true) ;
  	xhttp.send();
  	xhttp.onreadystatechange = function() {
    	if (this.readyState ==4 && this.status == 200) {
    		let datos = JSON.parse(this.responseText);
    		//console.log(datos);
    		Mesas = datos;
		}
	}
  	const doc = new XMLHttpRequest();
  	doc.open('GET', 'json/mesas'+dia+'.json?'+random+'', true) ;
  	doc.send();
  	doc.onreadystatechange = function() {
    	if (this.readyState ==4 && this.status == 200) {
    		let datos = JSON.parse(this.responseText);
    		reservas = datos;
		}
	}
	xhttp.addEventListener('load', function() {
		cambio(dia);
	});
}
function agregar(){
	if (!banPlus) {
		banPlus = true;
		var mes1 = document.getElementById("mesa11");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa11").src = "Imagenes/mesa2plus.png";
		}
		var mes1 = document.getElementById("mesa12");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa12").src = "Imagenes/mesa2plus.png";
		}
		var mes1 = document.getElementById("mesa13");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa13").src = "Imagenes/mesa2plus.png";
		}
		var mes1 = document.getElementById("mesa14");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa14").src = "Imagenes/mesa4plus.png";
		}
		var mes1 = document.getElementById("mesa15");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa15").src = "Imagenes/mesa4plus.png";
		}
		var mes1 = document.getElementById("mesa16");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa16").src = "Imagenes/mesa4plus.png";
		}
		var mes1 = document.getElementById("mesa17");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa17").src = "Imagenes/mesa4plus.png";
		}
		var mes1 = document.getElementById("mesa18");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa18").src = "Imagenes/mesa4plus.png";
		}
		var mes1 = document.getElementById("mesa19");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa19").src = "Imagenes/mesa2plus.png";
		}
		var mes1 = document.getElementById("mesa20");
		var src = mes1.getAttribute("src");
		if (src == "") {
			document.getElementById("mesa20").src = "Imagenes/mesa2plus.png";
		}
	}
}
function agregado(name){
	document.getElementById('nombre').value = "";
	document.form1.cant.value = 1;
	document.getElementById('horaIn1').value = "";
	document.getElementById('horaIn2').value = "";
	document.getElementById('horaOut1').value = "";
	document.getElementById('horaOut2').value = "";
	time = new Date(); 
	hora = time.getHours();
	minuto = time.getMinutes();
	mesaActual = "mesa"+name+"";
	var ban = false;
	var mesa = document.getElementById("mesa"+name+"");
	var src = mesa.getAttribute("src");
	if (src == "Imagenes/mesa2plus.png") {
		document.getElementById("mesa"+name+"").src = "Imagenes/mesa2.png";
		ban = true;
	}
	else if (src == "Imagenes/mesa4plus.png") {
		document.getElementById("mesa"+name+"").src = "Imagenes/mesa4.png";
		ban = true;
	}
	else if (src == "Imagenes/mesa2.png") {
		var currentTime = hora + ":" + minuto;
		document.getElementById("mesan").innerHTML='Mesa: '+name;
		document.form1.cant.max = 2;
		document.getElementById('horaIn1').value = hora;
		document.getElementById('horaIn2').value = minuto;
	}else if (src == "Imagenes/mesa4.png") {
		var currentTime = hora + ":" + minuto;
		document.getElementById("mesan").innerHTML='Mesa: '+name;
		document.form1.cant.max = 4;
		document.getElementById('horaIn1').value = hora;
		document.getElementById('horaIn2').value = minuto;
	}else if (src == "Imagenes/mesa5.png") {
		var currentTime = hora + ":" + minuto;
		document.getElementById("mesan").innerHTML='Mesa: '+name;
		document.form1.cant.max = 6;
		document.getElementById('horaIn1').value = hora;
		document.getElementById('horaIn2').value = minuto;
	}else if (src == "Imagenes/mesa2desabled.png") {
		document.getElementById("mesan").innerHTML='Mesa: '+name;
		document.getElementById('nombre').value = dat[(name-1)].nombre;
		document.form1.cant.value = dat[(name-1)].cantidad;
		document.getElementById('horaIn1').value = dat[(name-1)].hi1;
		document.getElementById('horaIn2').value = dat[(name-1)].hi2;
		if (dat[(name-1)].hf1 != "" && dat[(name-1)].hf2 != "") {
			document.getElementById('horaOut1').value = dat[(name-1)].hf1;
			document.getElementById('horaOut2').value = dat[(name-1)].hf2;
		}
	}
	else if (src == "Imagenes/mesa4desabled.png") {
		document.getElementById("mesan").innerHTML='Mesa: '+name;
		document.getElementById('nombre').value = dat[(name-1)].nombre;
		document.form1.cant.value = dat[(name-1)].cantidad;
		document.getElementById('horaIn1').value = dat[(name-1)].hi1;
		document.getElementById('horaIn2').value = dat[(name-1)].hi2;
		if (dat[(name-1)].hf1 != 0 && dat[(name-1)].hf2 != 0) {
			document.getElementById('horaOut1').value = dat[(name-1)].hf1;
			document.getElementById('horaOut2').value = dat[(name-1)].hf2;
		}
	}
	else if (src == "Imagenes/mesa5desabled.png") {
		document.getElementById("mesan").innerHTML='Mesa: '+name;
		document.getElementById('nombre').value = dat[(name-1)].nombre;
		document.form1.cant.value = dat[(name-1)].cantidad;
		document.getElementById('horaIn1').value = dat[(name-1)].hi1;
		document.getElementById('horaIn2').value = dat[(name-1)].hi2;
		if (dat[(name-1)].hf1 != 0 && dat[(name-1)].hf2 != 0) {
			document.getElementById('horaOut1').value = dat[(name-1)].hf1;
			document.getElementById('horaOut2').value = dat[(name-1)].hf2;
		}
	}
	if (ban) {
		switch(name){//actulizar valores del json
			case 11:
				Mesas[d].M1 = 1;
			break;
			case 12:
				Mesas[d].M2 = 1;
			break;
			case 13:
				Mesas[d].M3 = 1;
			break;
			case 14:
				Mesas[d].M4 = 1;
			break;
			case 15:
				Mesas[d].M5 = 1;
			break;
			case 16:
				Mesas[d].M6 = 1;
			break;
			case 17:
				Mesas[d].M7 = 1;
			break;
			case 18:
				Mesas[d].M8 = 1;
			break;
			case 19:
				Mesas[d].M9 = 1;
			break;
			case 20:
				Mesas[d].M10 = 1;
			break;
		}

		banPlus = false;
		var mes1 = document.getElementById("mesa11");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa2plus.png") {
			document.getElementById("mesa11").src = "";
		}
		var mes1 = document.getElementById("mesa12");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa2plus.png") {
			document.getElementById("mesa12").src = "";
		}
		var mes1 = document.getElementById("mesa13");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa2plus.png") {
			document.getElementById("mesa13").src = "";
		}
		var mes1 = document.getElementById("mesa14");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa4plus.png") {
			document.getElementById("mesa14").src = "";
		}
		var mes1 = document.getElementById("mesa15");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa4plus.png") {
			document.getElementById("mesa15").src = "";
		}
		var mes1 = document.getElementById("mesa16");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa4plus.png") {
			document.getElementById("mesa16").src = "";
		}
		var mes1 = document.getElementById("mesa17");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa4plus.png") {
			document.getElementById("mesa17").src = "";
		}
		var mes1 = document.getElementById("mesa18");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa4plus.png") {
			document.getElementById("mesa18").src = "";
		}
		var mes1 = document.getElementById("mesa19");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa2plus.png") {
			document.getElementById("mesa19").src = "";
		}
		var mes1 = document.getElementById("mesa20");
		var src = mes1.getAttribute("src");
		if (src == "Imagenes/mesa2plus.png") {
			document.getElementById("mesa20").src = "";
		}
		ban = false;
	}
}
function cambio(semana){
	if(i=0){
		semana = "Lunes";
		i++;
	}
	var c=0, x=0;
	switch(dia){
		case "Lunes":
			c=0;
		break;
		case "Martes":
			c=1;
		break;
		case "Miercoles":
			c=2;
		break;
		case "Jueves":
			c=3;
		break;
		case "Viernes":
			c=4;
		break;
		case "Sabado":
			c=5;
		break;
		case "Domingo":
			c=6;
		break;
	}
	switch(semana){
		case "Lunes":
			x=0;
		break;
		case "Martes":
			x=1;
		break;
		case "Miercoles":
			x=2;
		break;
		case "Jueves":
			x=3;
		break;
		case "Viernes":
			x=4;
		break;
		case "Sabado":
			x=5;
		break;
		case "Domingo":
			x=6;
		break;
	}
	d = x;
	if (!banPlus) {//Si el modo agregar esta desactivado
		console.log(Mesas);
		//carga el archivo de reservas del dia seleccionado
		dia = semana;
		document.getElementById("diaS").innerHTML=dia;
		const doc = new XMLHttpRequest();
	  	doc.open('GET', 'json/mesas'+dia+'.json?'+random+'', true) ;
	  	doc.send();
	  	doc.onreadystatechange = function() {
	    	if (this.readyState ==4 && this.status == 200) {
	    		let datos = JSON.parse(this.responseText);
	    		console.log(datos);
	    		reservas = datos;
			}
		}
		
		//Coloca las mesas extras
		if (Mesas[x].M1 == 1) {
		document.getElementById("mesa11").src = "Imagenes/mesa2.png";
		}else{
			document.getElementById("mesa11").src = "";
		}
		if (Mesas[x].M2 == 1) {
			document.getElementById("mesa12").src = "Imagenes/mesa2.png";
		}else{
			document.getElementById("mesa12").src = "";
		}
		if (Mesas[x].M3 == 1) {
			document.getElementById("mesa13").src = "Imagenes/mesa2.png";
		}else{
			document.getElementById("mesa13").src = "";
		}
		if (Mesas[x].M4 == 1) {
			document.getElementById("mesa14").src = "Imagenes/mesa4.png";
		}else{
			document.getElementById("mesa14").src = "";
		}
		if (Mesas[x].M5 == 1) {
			document.getElementById("mesa15").src = "Imagenes/mesa4.png";
		}else{
			document.getElementById("mesa15").src = "";
		}
		if (Mesas[x].M6 == 1) {
			document.getElementById("mesa16").src = "Imagenes/mesa4.png";
		}else{
			document.getElementById("mesa16").src = "";
		}
		if (Mesas[x].M7 == 1) {
			document.getElementById("mesa17").src = "Imagenes/mesa4.png";
		}else{
			document.getElementById("mesa17").src = "";
		}
		if (Mesas[x].M8 == 1) {
			document.getElementById("mesa18").src = "Imagenes/mesa4.png";
		}else{
			document.getElementById("mesa18").src = "";
		}
		if (Mesas[x].M9 == 1) {
			document.getElementById("mesa19").src = "Imagenes/mesa2.png";
		}else{
			document.getElementById("mesa19").src = "";
		}
		if (Mesas[x].M10 == 1) {
			document.getElementById("mesa20").src = "Imagenes/mesa2.png";
		}else{
			document.getElementById("mesa20").src = "";
		}
		//liberar mesas antes de bloquear
		for (var i = 1; i <= 10; i++) {
			var mesa = document.getElementById("mesa"+i+"");
			var src = mesa.getAttribute("src");
			if (src == "Imagenes/mesa2desabled.png") {
				document.getElementById("mesa"+i+"").src = "Imagenes/mesa2.png";
			}
			else if (src == "Imagenes/mesa4desabled.png") {
				document.getElementById("mesa"+i+"").src = "Imagenes/mesa4.png";
			}
			else if (src == "Imagenes/mesa5desabled.png") {
				document.getElementById("mesa"+i+"").src = "Imagenes/mesa5.png";
			}
		}
		//bloquea mesas ocupadas
		doc.addEventListener('load', function() {//ejecuta cuando el archivo se carga
    		time = new Date(); 
			hora = time.getHours();
			minuto = time.getMinutes();
			console.log(reservas);
			for (var i = 0; i < reservas.length; i++) {//revisa todos los registros
				var horaR = (reservas[i].HI).split(":");//separa la hora inicial
				if (parseInt(horaR[0])<=hora) {//si la hora de reserva ya paso
					if (reservas[i].HF == "") {//si no hay hora de finalizacion
						var mesa = document.getElementById(reservas[i].mesa);
						var src = mesa.getAttribute("src");
						if (src == "Imagenes/mesa2.png") {
							document.getElementById(reservas[i].mesa).src = "Imagenes/mesa2desabled.png";
						}
						else if (src == "Imagenes/mesa4.png") {
							document.getElementById(reservas[i].mesa).src = "Imagenes/mesa4desabled.png";
						}
						else if (src == "Imagenes/mesa5.png") {
							document.getElementById(reservas[i].mesa).src = "Imagenes/mesa5desabled.png";
						}
						for (var c = 0; c < 20; c++) {
							if (dat[c].Mesa == reservas[i].mesa) {
								dat[c].cantidad = reservas[i].cant;
								dat[c].nombre = reservas[i].nombre;
								dat[c].hi1 = horaR[0];
								dat[c].hi2 = horaR[1];
								dat[c].hf1 = 0;
								dat[c].hf2 = 0;
								break;
							}
						}
					}else{//si hay hora de finalizacion
						var horaR2 = (reservas[i].HF).split(":");
						if (parseInt(horaR2[0])<=hora) {//hora de finalizacion ya paso
							var mesa = document.getElementById(reservas[i].mesa);
							var src = mesa.getAttribute("src");
							if (src == "Imagenes/mesa2desabled.png") {
								document.getElementById(reservas[i].mesa).src = "Imagenes/mesa2.png";
							}
							else if (src == "Imagenes/mesa4desabled.png") {
								document.getElementById(reservas[i].mesa).src = "Imagenes/mesa4.png";
							}
							else if (src == "Imagenes/mesa5desabled.png") {
								document.getElementById(reservas[i].mesa).src = "Imagenes/mesa5.png";
							}
						}else if(parseInt(horaR2[0])>=hora){//hora de finalizacion no ha pasado
							var mesa = document.getElementById(reservas[i].mesa);
							var src = mesa.getAttribute("src");
							if (src == "Imagenes/mesa2.png") {
								document.getElementById(reservas[i].mesa).src = "Imagenes/mesa2desabled.png";
							}
							else if (src == "Imagenes/mesa4.png") {
								document.getElementById(reservas[i].mesa).src = "Imagenes/mesa4desabled.png";
							}
							else if (src == "Imagenes/mesa5.png") {
								document.getElementById(reservas[i].mesa).src = "Imagenes/mesa5desabled.png";
							}
							for (var c = 0; c < 20; c++) {
								if (dat[c].Mesa == reservas[i].mesa) {
									dat[c].cantidad = reservas[i].cant;
									dat[c].nombre = reservas[i].nombre;
									dat[c].hi1 = horaR[0];
									dat[c].hi2 = horaR[1];
									dat[c].hf1 = horaR2[0];
									dat[c].hf2 = horaR2[1];
									break;
								}
							}
						}
					}
				}
			}
		});
		console.log(dat);
	}else{
		alert("Salga del modo agregar");
	}
}
function reservar(){
	var nombre = document.forms["form1"].elements[0].value;
	var cant = document.forms["form1"].elements[1].value;
	var hi1 = document.forms["form1"].elements[2].value;
	var hi2 = document.forms["form1"].elements[3].value;
	var hf1 = document.forms["form1"].elements[4].value;
	var hf2 = document.forms["form1"].elements[5].value;
	if ((nombre != "" && cant != "") && (hi1 != "" && hi2 != "")) {
		if(hf1 != "" || hf2 != ""){
			HF = hf1+":"+hf2;
		}else{
			HF = "";
		}
		var myJSON = JSON.stringify(Mesas); 
		window.location = "reserva.php?dia="+dia+"&nom="+nombre+"&mesa="+mesaActual+"&cant="+cant+"&HI="+hi1+":"+hi2+"&HF="+HF+"&json="+myJSON;
	}else{
		alert("Ingrese los datos faltantes");
	}
}
function actualizar(){
	var myJSON = JSON.stringify(Mesas); 
	window.location = "guardar.php?json="+myJSON;
}