<?php
session_start(); //start a session
$_SESSION['userweb']=""; //mendeklarasikan variabel global session
header("location:login.php"); //alihkan ke halaman login.php
exit;
?>