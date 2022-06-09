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

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$homepage=$_POST['homepage'];
$username=$_POST['username'];
$password=$_POST['password'];

//memasukkan nilai dalam tabel user pada database "myweb"
$sql="INSERT INTO user (id,name, address, email, homepage, username, password) VALUES ('','$name','$address','$email','$homepage','$username', '$password')";
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);
echo "Proses simpan ke database berhasil";
header("location:signup.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROSES SIMPAN</title>
</head>
<body>
    <br><br><br>
    <a href="menu.php">Periksa</a>
</body>
</html>