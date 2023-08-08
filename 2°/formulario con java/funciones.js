//declaracion de una funcion
function valida(){
	var nombre = document.getElementById("clave").value;
	var passw = document.getElementById("passw").value;
	//si no hay nada en el campo passw
	if(nombre == ""){
		//mostrar cuadro de dialogo
		alert("falta colocar la clave");
		document.getElementById("clave").focus();
		return false;
	}else{
		if(passw == ""){
			alert("falta colocar la contraseña");
			document.getElementById("passw").focus();
			return false;
		}else{
			//unir los dos objetos(+)
			alert("Bienvenido: " + nombre);
			return true;
		}
	}
}