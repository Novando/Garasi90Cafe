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

function cekDaftar() {
	if (document.forms["formulir-daftar"]["password"].value != document.forms["formulir-daftar"]["password2"].value){
		document.getElementById("notif").style.display = "block";
	} else {
		document.getElementById("notif").style.display = "none";
	}
}

function hitungSub(counter) {
	var harga = document.getElementById("harga-"+counter).value;
	var jumlah = document.getElementById("jumlah-"+counter).value;
	var sub = harga * jumlah;
	document.getElementById("sub-"+counter).value = sub;
}

function total() {
	var bayar = 0;
	for (var i = 1; i <= 24; i++) {
		bayar = bayar + parseInt(document.getElementById("sub-"+i).value);
	}
	document.getElementById("pertama").style.display = "none";
	document.getElementById("kedua").style.display = "block";
	document.getElementById("total").innerHTML = "IDR " + bayar;
	alert(bayar);
}

function selesai() {
	window.location.href = "https://localhost/Web";
}