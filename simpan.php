<?php
include "konek.php";

$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$cek_user = "SELECT username FROM g90s";
$cek_email = "SELECT email FROM g90s";
$hasil_user = mysqli_query($konek, $cek_user);
$hasil_email = mysqli_query($konek, $cek_email);

while ($entri = mysqli_fetch_assoc($hasil_user)) {
	if ($entri["username"] == $username) {
		echo "Username tidak tersedia";
		exit();
		mysqli_close($konek);
	} 
}

while ($entri = mysqli_fetch_assoc($hasil_email)) {
	if ($entri["email"] == $email) {
		echo "email tidak tersedia";
		exit();
		mysqli_close($konek);
	} 
}

$masuk ="insert into member values ('$username', '$email', '', '', '$password')";
mysqli_query($konek, $masuk);

header("location:http://localhost/garasi90s/utama.html");
?>