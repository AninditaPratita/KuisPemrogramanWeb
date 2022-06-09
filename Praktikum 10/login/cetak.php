<?php 
//memulai sesi
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Penggunaan bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Beranda</title>
</head>
<!--Penggunaan CSS-->
<style>
    *{
        font-family: cursive;
        align-content: center;
    }
</style>
<body>
    <!--Menggunakan tabel agar tampilan lebih rapi-->
    <center><table border="1" style="background-color: skyblue">
        <tr style="background-color: royalblue">
            <td><center>
                <h1>BERANDA</h1></center> <!--bagian header-->
            </td></tr>
            <tr> <!--Menampilkan pesan selamat datang untuk username yang sedang mengakses dan menampilkan hari, tanggal-->
                <td><center>
                    <h1>Selamat datang, <?php echo $_SESSION['username'] ?> pada hari <?php date_default_timezone_set('Asia/Jakarta'); echo "<br/>"; echo date('l, d-m-Y');?></h1></center>
                </td></tr>
            <tr><td><!--Klik ini untuk memasukkan guestbook, user secara otomatis diarahkan ke halaman guesbook.php-->
                <center><h3><a href="http://localhost/Praktikum%2010/guesbook.php" class="button"> Input GuestBook</a></h3></center>
            </td></tr>
            <tr><td><!--Klik ini untuk melihat guestbook, user secara otomatis diarahkan ke halaman cetak_gb.php-->
                <center><h3><a href="http://localhost/Praktikum%2010/guesbook/cetak_gb.php" class="button">Lihat GuestBook</a></h3></center>
            </td></tr>
            <tr><td><!--Klik ini untuk keluar dari halaman beranda, user secara otomatis diarahkan ke halaman login.php-->
                <center><h3><a href="http://localhost/Praktikum%2010/login/login.php" class="button">Logout</a></h3></center>
            </td></tr>
    </table></center>
</body><!--Tag penutup Body-->
</html><!--Tag penutup HTML-->