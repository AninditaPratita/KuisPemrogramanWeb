<!DOCTYPE html>
<html>
<head>
	<title>Form Guestbook</title><!--Judul website -->
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
			<div class="col-md-8">
				<div class="card">
			<div class="card-header"> <!--Judul Form Guestbook-->
				GUESTBOOK
			</div>
			<div class="card-body">
				<form method="post" action="simpan_gb.php"> <!--menggunakan method post dan form action file simpan_gb.php-->
					<div class="form-group-row">
					<label for="posted" class="col-sm-2 col-form-label">Posted</label><!-- Label posted -->
					<div class="col-sm-11">
					<input type="date" name="posted" class="form-control" id="posted" placeholder="yyyy-mm-dd">
				</div>
			</div>
					<div class="form-group-row">
					<label for="name" class="col-sm-2 col-form-label">Name</label><!-- Label Nama -->
					<div class="col-sm-11">
					<input type="text" name="name" class="form-control" id="name" placeholder="name">
				</div>
			</div>
					<div class="form-group-row">
					<label for="email" class="col-sm-2 col-form-label">Email</label><!-- Label Email -->
					<div class="col-sm-11">
					<input type="text" name="email" class="form-control" id="email" placeholder="email">
				</div>
			</div>
					<div class="form-group-row">
					<label for="address" class="col-sm-2 col-form-label">Address</label><!-- Label Alamat -->
					<div class="col-sm-11">
					<input type="text" name="address" class="form-control" id="address" placeholder="address">
				</div>
			</div>
					<div class="form-group-row">
					<label for="city" class="col-sm-2 col-form-label">City</label><!-- Label City -->
					<div class="col-sm-11">
					<input type="text" name="city" class="form-control" id="city" placeholder="city">
				</div>
			</div>
					<div class="form-group row">
					<label for="message" class="col-sm-2 col-form-label">Message</label><!-- Label message -->
					<div class="col-sm-11">
					<textarea name="message" class="form-control" id="message" placeholder="message"></textarea>
				</div>
			</div>
				<br>
				<!--Tombol login dan submit untuk user-->
				<!--Inputan user akan disimpan ke database-->
			<div class="form-group row">
				<div class="col-sm-11">
					<button type="submit" class="btn btn-primary">Submit</button>
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