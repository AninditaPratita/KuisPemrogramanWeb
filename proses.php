<?php
//menghubungkan ke file koneksi_login.php yang berisi baris printah untuk menghubungkan ke database
include "koneksi_login.php";
//mendeklarasikan variabel username password
//mengambil data username dan password kemudian di cocokan ke database
$username = $_POST['username'];
$password = $_POST['password'];
$error="";
//baris perintah yang berisi query untuk menampilkan seluruh field dari tabel user
$sql="select * from user where username='$username' and password='$password';"; 
$qry=mysqli_query($conn, $sql) or die("Proses Login gagal");
$cek = mysqli_num_rows($qry);
//ketika username inputan user sesuai dengan username database maka akan diarahkan ke halaman cetak.php
//file cetak.php merupakan beranda website untuk akses ke guestbook
if($cek>0){
	session_start();
	$_SESSION['username'] = $username;
	header("location:cetak.php");
//jika username atau password salah maka muncul pesan eror dibawah ini
}else{
	$error="Username atau password tidak sesuai!";
}
?>