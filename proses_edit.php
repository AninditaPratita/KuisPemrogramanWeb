<?php
//menghubungkan ke file koneksi_login.php yang berisi baris printah untuk menghubungkan ke database
include "koneksi.php";
//ketika user klik tombol submit maka prosesnya ada dibawah ini
if(isset($_POST['submit'])){
$id = $_REQUEST['id'];
$posted = $_REQUEST['posted'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$message = $_REQUEST['message'];
//baris perintah yang berisi query untuk mengedit data sesuai inputan user yang baru melalui form edit guestbook berdasarkan id
$sql = "UPDATE guestbook SET posted='$posted', name='$name', email='$email', address='$address', city='$city', message='$message' WHERE id=$id";
$qry = mysqli_query($conn, $sql); //jalankan query
    if ($qry) {//kondisi ketika berhasil mengedit data yang ditampilkan pada form edit maka secara otomatis diarahkan ke halaman cetak_gb
        header('location: cetak_gb.php');
    }else{ //tampilkan pesan eror ketika tidak berhasil 
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}?>