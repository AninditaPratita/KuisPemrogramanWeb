<?php
//menghubungkan ke file koneksi_login.php yang berisi baris printah untuk menghubungkan ke database
include "koneksi.php";
//mendeklarasikan variabel
//memindahkan nilai data form ke variabel
$posted = $_POST['posted']; //variabel posted
$name = $_POST['name']; //variabel name
$email = $_POST['email']; //variabel email
$address = $_POST['address']; //variabel address
$city = $_POST['city']; //variabel city
$message = $_POST['message']; //variabel message
//memasukkan inputan user untuk setiap variabel yang ada didalam tabel guestbook
$sql = "INSERT guestbook set posted='$posted', 
							name='$name',
							email='$email',
							address='$address',
							city='$city',
							message='$message'";
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
//menampilkan pesan eror apabila gagal memasukkan nilai ke database 
mysqli_close($conn);
?>