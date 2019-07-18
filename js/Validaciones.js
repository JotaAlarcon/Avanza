// JavaScript Document
var nhtml;
var mensaje;
var msj;
var aux;
var tipoTest;


function valMail(){
	var mail = document.getElementById("mail").value.trim();
	if(mail == ""){
		mensaje = " El campo email no puede estar vacío <br>";
		document.getElementById("msgm").innerHTML = mensaje;
	}else{
		mensaje ="";
		document.getElementById("msgm").innerHTML = mensaje;
	}
}

function valFono(){
	var fono = document.getElementById("fono").value.trim();
	if(fono == ""){
		mensaje = " El campo celular no puede estar vacío <br>";
		document.getElementById("msg2").innerHTML = mensaje;
	}else{
		mensaje ="";
		document.getElementById("msg2").innerHTML = mensaje;
	}
}

//CERRAR SESION
function cerrarSesion(){
	session_start();
	session_unset();
	session_destroy();
	header("location: index.html");
}
//VALIDAR RUN
function valRun(){
	'use strict';//solo para deamweaver
	//alert("holy");
	//document.getElementById('mensaje').innerHTML = "Run válido";	
	var run1 = document.getElementById('run').value.trim();
	var vectorRun = run1.split("-");
	var run2 = vectorRun[0].split("");
	var factor = 2;
	var suma = 0;
	for(var i = run2.length-1 ;i>=0;i--){
		if(factor === 8){			
			factor = 2;
		}
		var aux = parseInt(run2[i])* factor;
		suma += aux;
		factor++;
	}
	var porce = suma % 11;
	var resultado = 11-porce;
	var mensaje;
	if(resultado === 10){
		if(vectorRun[1].toUpperCase()=="K"){
			mensaje = "";
			document.getElementById("msg").innerHTML = mensaje;
		}else{
			mensaje ="Run incorrecto <br>";
			document.getElementById("msg").innerHTML = mensaje;
		}
	}else if(resultado == vectorRun[1]){
		mensaje="";
		document.getElementById("msg").innerHTML = mensaje;
	}else{
		mensaje = "Run incorrecto <br>";
		document.getElementById("msg").innerHTML = mensaje;
	}
}


//VALIDAR NOMBRE
function valNom(){
	var nom = document.getElementById("name").value.trim();
	if(nom == ""){
		mensaje = "El campo no puede estar vacío";
		document.getElementById("name").innerHTML = mensaje;
	}else{
		mensaje="";
		document.getElementById("name").innerHTML = mensaje;
	}
}

//VALIDAR PASS


function valTipo(){
	'use strict';
	var perfil = document.getElementById("tipodetest").value;
	if(perfil == "0"){
		mensaje += " SELECCIONE UN TIPO DE TEST<br>";
		document.getElementById("tipodetest").focus();
	}else if(mensaje=="") {
		switch(perfil){
			case "1": 			
				tipoTest="Personalidad";
			break;
			case "2": 			
				tipoTest="Psico-social";
			break;
			case "3":  			
				tipoTest="Interes Profesional";
			break;
		}
	}
}

function validar(){
	var pass1 = document.getElementById("pass").value.trim();
	var pass2 = document.getElementById("pass2").value.trim();
	if(pass1 == pass2){
		mensaje ="";
	}else {
		mensaje ="Las contraseñas no coinciden";
	}
}