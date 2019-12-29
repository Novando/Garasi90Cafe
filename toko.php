<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Garasi 90s Café</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
	<script src="perintah.js"></script>
</head>
<body style="background-color: white;">
	<div class="masuk-daftar" id="masuk-daftar">
		<form name="formulir-masuk" class="formulir-masuk" id="formulir-masuk" method="post" action="masuk.php">
			<h1>MASUK</h1>
			<input type="text" placeholder="USERNAME atau E-MAIL" name="user" required=""><br>
			<input type="password" placeholder="PASSWORD" name="password" required=""><br>
			<button type="submit" class="tombol-masuk">Masuk</button>
			<button type="reset" class="tombol-batal" onclick="tutupFormulir()">Batal</button><br><br>
			<a href="#">Lupa Password?</a><br>
			Belum punya akun? <a href="#" onclick="mauDaftar()">Daftar dulu</a>
		</form>
		<form name="formulir-daftar" class="formulir-daftar" id="formulir-daftar" method="post" action="simpan.php">
			<h1>DAFTAR</h1>
			<input type="text" placeholder="E-MAIL" name="email" td="email" required=""><br>
			<input type="text" placeholder="USERNAME" name="user" td="user" required=""><br>
			<input type="password" placeholder="PASSWORD" name="password" td="passwod" required=""><br>
			<input type="password" placeholder="ULANG PASSWORD" name="password2" required="" onkeyup="cekDaftar()"><br>
			<span class="notif" id="notif">Password tidak sesuai</span>
			<button type="submit" class="tombol-masuk">Masuk</button>
			<button type="reset" class="tombol-batal" onclick="tutupFormulir()">Batal</button><br><br>
			Sudah punya akun?<a href="#" onclick="mauMasuk()">Silahkan masuk</a>
		</form>
	</div>
	<div class="kepala">
		<center><img src="gambar/logo.png"></center>
	</div>
	<ul>
		<li class="level-0"><a href="index.php">BERANDA</a></li>
		<li class="level-0"><a href="https://www.google.com/maps/place/8%C2%B029'49.4%22S+140%C2%B024'18.6%22E/@-8.497041,140.4046098,19z/data=!3m1!4b1!4m14!1m7!3m6!1s0x69b53e2c29a12387:0x578edb6cfc3c6f21!2sMerauke,+Kec.+Merauke,+Kabupaten+Merauke,+Papua!3b1!8m2!3d-8.4991117!4d140.4049814!3m5!1s0x0:0x0!7e2!8m2!3d-8.497041!4d140.4051566?hl=id">LOKASI</a></li>
		<li class="level-0"><a href="toko.php">TOKO</a></li>
		<li class="level-0"><a href="#event">ACARA</a></li>
		<li class="level-1" style="float:right;"><font color="white">Halo, <?= $_SESSION["nama"] ?></font></li>
		<li class="masuk" style="float:right;"><a href="#login" onclick="bukaFormulir()">MASUK</a></li>
		<li class="level-1" style="float:right;"><a href="keluar.php" onclick="">KELUAR</a></li>
		<li class="level-1" style="float:right;"><a href="#login" onclick="">MEMBER</a></li>
		<li class="level-2" style="float:right;"><a href="#login" onclick="">KASIR</a></li>
		<li class="level-3" style="float:right;"><a href="admin.php" onclick="">ADMIN</a></li>
	</ul>
	<center>
		<div class="produk">
			<img src="toko/tridalu.jpg"><br>
			<b>Namalahapa</b><br>
			15k<br><br>
			</div>
		</div>
		<div class="produk">
			<img src="toko/tridalu.jpg"><br>
			<b>Namalahapa</b><br>
			15k<br><br>
			</div>
		</div>
		<div class="produk">
			<img src="toko/tridalu.jpg"><br>
			<b>Namalahapa</b><br>
			15k<br><br>
			</div>
		</div>
	</center>
</body>
</html>