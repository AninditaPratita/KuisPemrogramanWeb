<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title> <!--Judul Website-->
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
			<div class="col-md-6">
				<div class="card">
			<div class="card-header"> <!--Judul Form Login-->
				LOGIN
			</div>
			<div class="card-body">
				<form method="post" action="proses.php"> <!--menggunakan method post dan form action file proses.php-->
					<div class="form-group-row">
					<label for="username" class="col-sm-3 col-form-label">Username</label><!-- Label Username -->
					<div class="col-sm-9">
					<input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
					<br>
				</div>
			</div>
					<div class="form-group-row">
					<label for="password" class="col-sm-3 col-form-label">Password</label><!-- Label Password -->
					<div class="col-sm-9">
					<input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
				</div>
			</div>
				<br>
				<!--Tombol login dan signup untuk user-->
			<div class="form-group row">
				<div class="col-sm-5">
					<button type="submit" class="btn btn-primary">Log In</button> 
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-5">
					<div class="btn btn-primary">Sign Up <a href="http://localhost/Praktikum%2010/signup.php">-</a></div> 
					<!--ketika user klik tombol signup maka secara otomatis akan diarahkan ke halaman signup.php-->
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

