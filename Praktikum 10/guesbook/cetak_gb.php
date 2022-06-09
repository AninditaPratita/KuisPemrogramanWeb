<center><h2>GUESTBOOK</h2>
<br>
<!--baris code 4-15 merupakan perintah untuk membuat koneksi dengan database-->
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
//baris perintah yang berisi query untuk menmapilkan seluruh field data yang ada pada tabel guestbook yang diurutkan berdasarkan id
$sql = "select * from guestbook order by id;";
$qry = mysqli_query($conn, $sql) or die("Proses cetak gagal");//jalankan query, jika gagal tampilkan pesan eror
//tampilkan daftar guestbook menggunakan tabel, urutkan kolom sesuai dengan urutan array 
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>No. ID</th>
<th>Tanggal</th>
<th>Nama</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>
<th>Tombol</th>
<tr>";
//fungsi dibawah ini berfungsi untuk mengembalikan 1 baris nilai dari sebuah tabel untuk tiap pemanggilan
while($hasil=mysqli_fetch_row($qry)){ //menampilkan tabel secara baris per baris
echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
<td><a href='hapus.php?id=".$hasil[0]."' class= 'btn btn-danger'>Hapus</a>
<a href='edit.php?id=".$hasil[0]."' class= 'btn btn-danger'>Edit</a></td>
</tr>";
}
//pada akhir terdapat link untuk tombol edit dan hapus field guestbook
echo "</table>";
?>
<br>
<a href="guesbook.php">Kembali</a> <!--untuk user, apabila ingin kembali ke halaman guestbook-->
</center>