<!DOCTYPE html>
<html>
<head>
    <title>Form Sign Up</title><!--Judul website -->
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
            <div class="card-header"> <!--Judul Form Sign Up-->
                SIGN UP
            </div>
            <div class="card-body">
                <form method="post" action="simpan.php"> <!--menggunakan method post dan form action file simpan.php--> 
                    <div class="form-group-row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label> <!-- Label Nama -->
                    <div class="col-sm-11">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama Anda">
                </div>
            </div>
                    <div class="form-group-row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label><!-- Label Alamat -->
                    <div class="col-sm-11">
                    <input type="text" name="address" class="form-control" id="address" placeholder="Masukkan alamat Anda">
                </div>
                    <div class="form-group-row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label> <!-- label Email -->
                    <div class="col-sm-11">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                </div>
                    <div class="form-group-row">
                    <label for="homepage" class="col-sm-2 col-form-label">Homepage</label> <!-- LabelHomepage -->
                    <div class="col-sm-11">
                    <input type="text" name="homepage" class="form-control" id="homepage" placeholder="homepage">
                </div>
                    <div class="form-group-row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label><!-- Label Username -->
                    <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
                </div>
            </div>
                    <div class="form-group-row">
                    <label for="password" class="col-sm-3 col-form-label">Password</label> <!-- Label Password -->
                    <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
                </div>
            </div>
                <br>
                <!--Tombol login dan submit untuk user-->
                <!--Inputan user akan disimpan ke database-->
            <div class="form-group row">
                <div class="col-sm-11">
                    <button type="submit" name="btnSubmit"class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!--Klik tombol ini maka akan diarahkan ke halaman login-->
            <div class="form-group row">
                <div class="col-sm-5">
                    <div class="btn btn-primary">Back <a href="http://localhost/Praktikum%2010/login/login.php">-</a></div>
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