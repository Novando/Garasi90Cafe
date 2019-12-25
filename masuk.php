<?php
session_start();
require "konek.php";

$identitas = $_POST["user"];
$password = $_POST["password"];
$cek_user = mysqli_query($konek, "SELECT * FROM user WHERE username = '$identitas'");
$cek_email = mysqli_query($konek, "SELECT * FROM user WHERE email = '$identitas'");

if ((mysqli_num_rows($cek_user) === 1)) {
	$cek = mysqli_fetch_assoc($cek_user);
	if ($cek["password"] == $password) {
		$berhasil = true;
	} else {
		$berhasil = false;
		echo "<script> alert('PASSWORD atau USERNAME salah') </script>";
	}
} else if ((mysqli_num_rows($cek_email) === 1)) {
	$cek = mysqli_fetch_assoc($cek_email);
	if ($cek["password"] == $password) {
		$berhasil = true;
	} else {
		$berhasil = false;
		echo "<script> alert('PASSWORD atau USERNAME salah') </script>";
	}
} else {
	$berhasil = false;
	echo "<script> alert('USERNAME atau USERNAME salah') </script>";	
}

if ($berhasil == true) {
	$_SESSION["nama"] = strtoupper($cek["username"]);
	$_SESSION["akses"] = $cek["akses"];
	$_SESSION["masuk"] = true;
	header("location:https://localhost/garasi90cafe");
} else {
	$_SESSION = [];
	session_unset();
	$_SESSION["masuk"] = false;
	header("location:https://localhost/garasi90cafe");
}
?>