<?php
	session_start();
	if ($_SESSION["akses"] < 3) {
		header("location:/garasi90cafe");
		exit;
	}
	require "konek.php";
	$pengguna = mysqli_query($konek, "SELECT * FROM user");
	$nomor = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Garasi 90s Café</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
	<script src="perintah.js"></script>
	<?php switch ($_SESSION["akses"]) {
	case '1': ?>
		<style type="text/css">
			.level-1{display: block;}
			.masuk{display: none;}
		</style>
		<?php break;

	case '2': ?>
		<style type="text/css">
			.level-1{display: block;}
			.level-2{display: block;}
			.masuk{display: none;}
		</style>
		<?php break;

	case '3': ?>
		<style type="text/css">
			.level-1{display: block;}
			.level-2{display: block;}
			.level-3{display: block;}
			.masuk{display: none;}
		</style>
		<?php break;

	case '4': ?>
		<style type="text/css">
			.level-1{display: block;}
			.level-2{display: block;}
			.level-3{display: block;}
			.level-4{display: block;}
			.masuk{display: none;}
		</style>
		<?php break;

	case '5': ?>
		<style type="text/css">
			.level-1{display: block;}
			.level-2{display: block;}
			.level-3{display: block;}
			.level-4{display: block;}
			.level-5{display: block;}
			.masuk{display: none;}
		</style>
		<?php break;

	default : ?>
		<style type="text/css">
			.level-1{display: none;}
			.level-2{display: none;}
			.level-3{display: none;}
			.level-4{display: none;}
			.level-5{display: none;}
			.masuk{display: block;}
		</style>
		<?php break;
	} ?>
</head>
<body style="background-color: white;">
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
		<li class="level-2" style="float:right;"><a href="kasir.php" onclick="">KASIR</a></li>
		<li class="level-3" style="float:right;"><a href="admin.php" onclick="">ADMIN</a></li>
	</ul>
	<div class="daftar-member">
		<center>
			<br><br><br><br>
			<font size="24px">DAFTAR MEMBER GARASI 90s</font>
			<br><br>
		<table border="1">
			<tr>
				<th>No.</th>
				<th>Pengguna</th>
				<th>e-Mail</th>
				<th>Level Akses</th>
			</tr>
			<?php foreach ($pengguna as $guna) { 
				$nomor = $nomor + 1;?>
				<tr>
					<td><?php echo $nomor ?></td>
					<td><?php echo $guna["username"] ?></td>
					<td><?php echo $guna["email"] ?></td>
					<td><?php echo $guna["akses"]?></td>
				</tr>
			<?php } ?>
		</table>
		</center>
	</div>
	<div class="daftar-member">
		<center>
			<br><br><br><br>
			<font size="24px">SISTEM INPUT MENU BARU GARASI 90s</font>
			<br><br>
		<form>
		<table border="1">
			<tr>
				<td>
					<label for="jenismenu">Jenis</label>
				</td>
				<td>
					<label for="jenismenu">:</label>
				</td>
				<td>
					<select id="jenismenu" name="jenismenu">
						<option>Makanan</option>
						<option>Minuman</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="namamenu">Nama</label>
				</td>
				<td>
					<label for="namamenu">:</label>
				</td>
				<td>
					<input type="text" id="jenismenu" name="namamenu">
				</td>
			</tr>
			<tr>
				<td>
					<label for="hargamenu">Harga</label>
				</td>
				<td>
					<label for="hargamenu">:</label>
				</td>
				<td>
					<input type="number" name="hargamenu">
				</td>
			</tr>
			<tr>
				<td>
					<label for="deskmenu">Nama</label>
				</td>
				<td>
					<label for="deskmenu">:</label>
				</td>
				<td>
					<input type="area" size="128" name="deskmenu">
				</td>
			</tr>
			<tr>
				<td>
					<label for="namamenu">Nama</label>
				</td>
				<td>
					<label for="namamenu">:</label>
				</td>
				<td>
					<input type="text" name="namamenu">
				</td>
			</tr>
		</table>
		</form>
		</center>
	</div>
</body>
</html>