<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

$masukgak = false;

header("location:/garasi90cafe/");
?>