function bukaFormulir(){
	document.getElementById("level-0").style.display = "none";
}

function tutupFormulir(){
	document.getElementById('masuk-daftar').style.display = 'none';
}

function mauMasuk(){
	document.getElementById("formulir-masuk").style.display = "block";
	document.getElementById("formulir-daftar").style.display = "none";
}

function mauDaftar(){
	document.getElementById("formulir-masuk").style.display = "none";
	document.getElementById("formulir-daftar").style.display = "block";
}

function cekDaftar() {
	if (document.forms["formulir-daftar"]["password"].value != document.forms["formulir-daftar"]["password2"].value){
		document.getElementById("notif").style.display = "block";
	} else {
		document.getElementById("notif").style.display = "none";
	}
}