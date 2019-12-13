function bukaFormulir(){
	document.getElementById("masuk-daftar").style.display = "block";
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