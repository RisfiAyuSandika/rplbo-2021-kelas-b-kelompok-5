<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pelayanan Surat Menyurat Satu Pintu MTSN 10 Pekanbaru</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body style="background: white">
<div style="margin-left: 30px;margin-top: 20px;">
    <br><br><br><br>
    <center>
        <h3>SELAMAT DATANG DI</h3>
        <h4>SISTEM INFORMASI SURAT MENYURAT MTSN 10 PEKANBARU</h4>
    </center>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <center>
                <div class="col-md-6" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2)">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/login.png" width="400">
                        </div>
                        <form action="/login" method="post" class="col-md-6" style="text-align: left">
                            @csrf
                            <br>
                            <h3>Login</h3>
                            <h6>Welcome back, please login to your account</h6>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="nama_pengguna" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" name="kata_sandi" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-info btn-block">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>

</body>

</html>
