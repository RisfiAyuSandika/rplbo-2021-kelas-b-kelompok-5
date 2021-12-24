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

<body style="background: url('/gambar.jpg'); background-size: cover">
<div style="margin-left: 30px;margin-top: 20px;">
    <h3 style="color: white">SELAMAT DATANG DI</h3>
    <h4 style="color: white">SISTEM INFORMASI SURAT MENYURAT MTSN 10 PEKANBARU</h4>
    <a href="/login" class="btn btn-dark" style="position: absolute;top: 40px;right: 30px;">LOGIN</a>
</div>
<div style="height: 80vh" class="d-flex justify-content-center align-items-center">

    <div class="card" style="width: 50%">
        <div class="card-body">
            <div class="row">
                @if(session()->has('sukses'))
                    <div class="col-md-12">
                        <center><h3>Surat Berhasil Diajukan!</h3></center>
                        <center><h3>Nomor Id Pengajuan</h3></center>
                        <br>
                        <center>
                            <button class="btn btn-light-primary">PL-{{session()->get('sukses')}}</button>
                            <input id="nomor" hidden value="PL-{{session()->get('sukses')}}">
                            <button class="btn btn-light-primary" onclick="salin()">Salin</button>
                        </center>
                    </div>
                @else
                <form action="/suratlegalisir" method="post" class="col-md-12">
                    @csrf
                    <h4>Silahkan Isi Form Pengajuan Legalisir</h4>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Nama Siswa</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">NISN</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="number" class="form-control" name="nisn" placeholder="NISN" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Tahun Tamat</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="number" class="form-control" name="tahun_tamat" placeholder="Tahun Tamat" required>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Daftar</button>
                    <a class="btn btn-warning" type="button" href="/">Batal</a>
                </form>
                @endif
            </div>
        </div>
    </div>

</div>

<script>
    function salin() {
        var copyText = document.getElementById("nomor");

        copyText.select();
        copyText.setSelectionRange(0, 999999999);

        navigator.clipboard.writeText(copyText.value);

        alert("Berhasil salin: " + copyText.value);
    }
</script>

</body>

</html>
