<?php
require "konek.php";

$username = strtolower($_POST["user"]);
$email = strtolower($_POST["email"]);
$password = $_POST["password"];
$cek_user = mysqli_query($konek, "SELECT username FROM user WHERE username = '$username'");
$cek_email = mysqli_query($konek, "SELECT email FROM user WHERE email = '$email'");

if (mysqli_fetch_assoc($cek_user)) {
	echo "<script> alert('USERNAME tidak tersedia') </script>";
} else if (mysqli_fetch_assoc($cek_email)) {
	echo "<script> alert('EMAIL tidak tersedia') </script>";
} else {
	mysqli_query($konek, "INSERT INTO user VALUES ('$username', '$password', '$email', '')");
	mysqli_query($konek, "INSERT INTO daftar VALUES ('', '$username', '$email', '$password', '', '')");
	echo "<script> alert('Pendaftaran Berhasil!') </script>";
}
?>