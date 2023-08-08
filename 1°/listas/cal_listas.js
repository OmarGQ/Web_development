function calcular(){
	var lista = new Array();
	var listb = new Array();
	var listnum = document.getElementById("list").value;
	var tot = 0;

	for(var i = 0; i < listnum; i++){
		lista[i]=Math.round(Math.random()*99)+1;
		listb[i]=Math.round(Math.random()*99)+1;
		document.getElementById("listA").innerHTML += lista[i].toString()+"-";
		document.getElementById("listB").innerHTML += listb[i].toString()+"-";
		tot += lista[i] * listb[i];
		document.getElementById("res").innerHTML += tot;
	}
}	