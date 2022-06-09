<?php
//menghubungkan ke file koneksi_login.php yang berisi baris printah untuk menghubungkan ke database
include 'koneksi.php';
// melakukan pengecekan apakah id ada di di field tabel guestbook
if( isset($_GET['id']) ){ 
    $id = $_GET['id'];
    //baris perintah yang berisi query untuk menghapus data berdasarkan id
    $mysqli = "DELETE FROM guestbook WHERE id=$id";
    $query = mysqli_query($conn, $mysqli);

    //kondisi ketika berhasil menghapus maka akan diarahkan ke halama cetak_gb untuk memastikan apakah data benar terhapus dari daftar
    if( $query ){
        header('Location: cetak_gb.php');
    } else { //menampilkan pesan gagal ketika tidak berhasil menghapus data berdasarkan id
        die("Data gagal dihapus, coba lagi");
    }
} else { //pesan eror ketika tidak berhasil terkoneksi dengan database
    die("Anda tidak dapat mengakses halaman ini, coba lagi");
}
?>