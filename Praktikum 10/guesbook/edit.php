<?php
//menghubungkan ke file koneksi.php yang berisi baris printah untuk menghubungkan ke database
include 'koneksi.php';
if(!isset($_GET['id'])){ //mengambil data berdasarkan id
	header('location: cetak_gb.php');
}
	$id = $_GET['id'];
	//baris perintah query untuk menampilkan field guestbook berdasarkan id
	$sql = "select * FROM guestbook WHERE id=$id";
	$qry = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($qry); //untuk mengambil baris hasil sebagai array
    if (mysqli_num_rows($qry) < 1) { //apabila gagal mencari data berdasarkan id maka akan muncul pesan dibawah ini
    	die("Mohon maaf data tidak ada, coba lagi");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT GUESTBOOK</title> 
	<!--Penggunaan Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--Penggunaan CSS-->
	<style>
		.card {background-color: skyblue;}
		.card-header {background-color: royalblue ;color: #FFFFFF;}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="card">
			<div class="card-header"> <!--Judul Form Edit Guestbook-->
				EDIT GUESTBOOK
			</div>
			<div class="card-body">
				<form method="post" action="proses_edit.php"><!--menggunakan method post dan form action file proses_edit.php-->
					<div class="form-group-row">
					<label for="posted" class="col-sm-2 col-form-label">Posted</label><!-- Label posted -->
					<div class="col-sm-11">
					<!--menampilkan nilai posted sesuai dengan id yang dipanggil-->
					<input type="date" name="posted" class="form-control" id="posted" placeholder="yyyy-mm-dd" value="<?php echo $row['posted']?>">
					<input type="hidden" name="id" value="<?php echo $row['id']?>">
				</div>
			</div>
					<div class="form-group-row">
					<label for="name" class="col-sm-2 col-form-label">Name</label><!-- Label Nama -->
					<div class="col-sm-11">
					<!--menampilkan nilai nama sesuai dengan id yang dipanggil-->
					<input type="text" name="name" class="form-control" id="name" placeholder="name" value="<?php echo $row['name']?>">
				</div>
			</div>
					<div class="form-group-row">
					<label for="email" class="col-sm-2 col-form-label">Email</label> <!-- Label Email -->
					<div class="col-sm-11">
					<!--menampilkan nilai email sesuai dengan id yang dipanggil-->
					<input type="text" name="email" class="form-control" id="email" placeholder="email" value="<?php echo $row['email']?>">
				</div>
			</div>
					<div class="form-group-row">
					<label for="address" class="col-sm-2 col-form-label">Address</label><!-- Label Alamat -->
					<div class="col-sm-11">
					<!--menampilkan nilai alamat sesuai dengan id yang dipanggil-->
					<input type="text" name="address" class="form-control" id="address" placeholder="address" value="<?php echo $row['address']?>">
				</div>
			</div>
					<div class="form-group-row">
					<label for="city" class="col-sm-2 col-form-label">City</label><!-- Label City -->
					<div class="col-sm-11">
						<!--menampilkan nilai city sesuai dengan id yang dipanggil-->
					<input type="text" name="city" class="form-control" id="city" placeholder="city" value="<?php echo $row['city']?>">
				</div>
			</div>
					<div class="form-group row">
					<label for="message" class="col-sm-2 col-form-label">Message</label> <!-- Label message -->
					<div class="col-sm-11">
						<!--menampilkan nilai message sesuai dengan id yang dipanggil-->
					<textarea name="message" class="form-control" id="message" placeholder="message" value="<?php echo $row['message']?>"></textarea>
				</div>
			</div>
			<!--Tombol kembali dan Submit untuk user-->
			<div class="form-group row">
				<div class="col-sm-11">
					<a href="cetak_gb.php">Kembali</a> <!--User secara otomatis akan diarahkan ke halaman cetak_gb.php-->
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</div>
			</div>
		</form>
</div>
</div>
</div>
</div>
</div>
</body><!--Tag penutup Body-->
</html><!--Tag penutup HTML-->