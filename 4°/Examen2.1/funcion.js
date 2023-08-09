var Mesas;
var num = "1";
function loadDoc() {
	time = new Date(); 
	hora = time.getHours();
	min = time.getMinutes();
	seg = time.getSeconds();
	random = (hora * min)/seg;
  	const xhttp = new XMLHttpRequest();
  	xhttp.open('GET', 'json/sala1.json?'+random+'', true) ;
  	xhttp.send();
  	xhttp.onreadystatechange = function() {
    	if (this.readyState ==4 && this.status == 200) {
    		let datos = JSON.parse(this.responseText);
    		console.log(datos);
    		Mesas = datos;
		}
	}
	xhttp.addEventListener('load', function() {
		cambio(num);
	});
}
function cambio(semana){
    num = semana;
    const doc = new XMLHttpRequest();
      doc.open('GET', 'json/sala'+num+'.json?'+random+'', true) ;
      doc.send();
      doc.onreadystatechange = function() {
        if (this.readyState ==4 && this.status == 200) {
          let datos = JSON.parse(this.responseText);
          console.log(datos);
          Mesas = datos;
      }
    }
    doc.addEventListener('load', function() {
      //Coloca las mesas e0tras
      if (Mesas[0].S1 == 1) {
      document.getElementById("mesa1").src = "imagenes/rojo.jpg";
        div = document.getElementById("D1");
        div.style.display = 'none';
      }else{
        document.getElementById("mesa1").src = "imagenes/verde.jpg";
        div = document.getElementById("D1");
        div.style.display = '';
      }
      if (Mesas[0].S2 == 1) {
        document.getElementById("mesa2").src = "imagenes/rojo.jpg";
        div = document.getElementById("D2");
        div.style.display = 'none';
      }else{
        document.getElementById("mesa2").src = "imagenes/verde.jpg";
        div = document.getElementById("D2");
        div.style.display = '';
      }
      if (Mesas[0].S3 == 1) {
        document.getElementById("mesa3").src = "imagenes/rojo.jpg";
        div = document.getElementById("D3");
        div.style.display = 'none';
      }else{
        document.getElementById("mesa3").src = "imagenes/verde.jpg";
        div = document.getElementById("D3");
        div.style.display = '';
      }
      if (Mesas[0].S4 == 1) {
        document.getElementById("mesa4").src = "imagenes/rojo.jpg";
        div = document.getElementById("D4");
        div.style.display = 'none';
      }else{
        document.getElementById("mesa4").src = "imagenes/verde.jpg";
        div = document.getElementById("D4");
        div.style.display = '';
      }
      if (Mesas[0].S5 == 1) {
        document.getElementById("mesa5").src = "imagenes/rojo.jpg";
        div = document.getElementById("D5");
        div.style.display = 'none';
      }else{
        document.getElementById("mesa5").src = "imagenes/verde.jpg";
        div = document.getElementById("D5");
        div.style.display = '';
      }
      if (Mesas[0].S6 == 1) {
        document.getElementById("mesa6").src = "imagenes/rojo.jpg";
        div = document.getElementById("D6");
        div.style.display = 'none';
      }else{
        document.getElementById("mesa6").src = "imagenes/verde.jpg";
        div = document.getElementById("D6");
        div.style.display = '';
      }
      if (Mesas[0].S7 == 1) {
        document.getElementById("mesa7").src = "imagenes/rojo.jpg";
        div = document.getElementById("D7");
        div.style.display = 'none';
      }else{
        document.getElementById("mesa7").src = "imagenes/verde.jpg";
        div = document.getElementById("D7");
        div.style.display = '';
      }
    }); 
}
function reservar(n){
  var nombre = document.getElementById("nom"+n+"").value;
  if (nombre != "") {
    if (n == 1) {
      Mesas[0].S1 = 1;
    }else if (n == 2) {
      Mesas[0].S2 = 1;
    }else if (n == 3) {
      Mesas[0].S3 = 1;
    }else if (n == 4) {
      Mesas[0].S4 = 1;
    }else if (n == 5) {
      Mesas[0].S5 = 1;
    }else if (n == 6) {
      Mesas[0].S6 = 1;
    }else if (n == 7) {
      Mesas[0].S7 = 1;
    }
    console.log(Mesas);
    var myJSON = JSON.stringify(Mesas); 
    window.location = "reserva.php?num="+num+"&nom="+nombre+"&json="+myJSON;
  }else{
    alert("ingrese un nombre");
  }
}