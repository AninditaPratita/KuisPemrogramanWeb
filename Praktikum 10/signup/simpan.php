<!--baris code 2-12 merupakan perintah untuk membuat koneksi dengan database-->
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";

$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

//mendeklarasikan variabel
//memindahkan nilai data form ke variabel
$name=$_POST['name']; //variabel nama
$address=$_POST['address']; //variabel address 
$email=$_POST['email']; //variabel email
$homepage=$_POST['homepage']; //variabel homepage 
$username=$_POST['username']; //variabel username
$password=$_POST['password']; //variabel password

//memasukkan inputan user untuk setiap variabel yang ada didalam tabel guestbook
$sql="INSERT INTO user (id,name, address, email, homepage, username, password) VALUES ('','$name','$address','$email','$homepage','$username', '$password')";
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal"); //jalankan query jika tidak tampilkan pesan eror
mysqli_close($conn);
//menampilkan pesan berhasil apabila sukses memasukkan nilai ke database 
echo "Proses simpan ke database berhasil";
header("location:signup.php"); //user secara otomatis diarahkan ke signup.php
?>