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

    <div class="card" style="width: 40%">
        <div class="card-body">
            <div class="row">
                @if($status)
                    <div class="col-md-12">
                        <center><h4>Hasil lacak surat</h4></center>
                        <br>
                        @if($data)
                        <center>
                            <h5>Id. Pengajuan : {{$tipe}}-{{$data->id}}</h5>
                            <br>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($data->status == 'diajukan')
                                <tr>
                                    <td>1</td>
                                    <td>Diajukan</td>
                                    <td>Surat Belum Selesai</td>
                                </tr>
                                @elseif($data->status == 'disetujui')
                                    <tr>
                                        <td>1</td>
                                        <td>Diajukan</td>
                                        <td>Surat Belum Selesai</td>
                                    </tr>
                                    @if($tipe == 'PS')
                                        <tr>
                                            <td>2</td>
                                            <td>Disetujui</td>
                                            <td>Surat Selesai</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>2</td>
                                            <td>Disetujui</td>
                                            <td>Silahkan datang ke sekolah</td>
                                        </tr>
                                    @endif
                                @elseif($data->status == 'diunggah')
                                    <tr>
                                        <td>1</td>
                                        <td>Diajukan</td>
                                        <td>Surat Belum Selesai</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Disetujui</td>
                                        <td>Surat Belum Selesai</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Diunggah</td>
                                        <td>Surat Selesai</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            <br>
                            <a class="btn btn-light-primary" href="/">Kembali</a>
                        </center>
                        @else
                            <center>
                                <h4>Data tidak ditemukan</h4>
                                <a class="btn btn-light-primary" href="/">Kembali</a>
                            </center>
                        @endif
                    </div>
                @else
                <form action="/lacak" method="post" class="col-md-12">
                    @csrf
                    <h4>Input Id. Pengajuan</h4>
                    <br>
                    <center>
                        <div class="form-group">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="nomor" placeholder="ex : PS-1" required>
                            </div>
                        </div>
                    </center>
                    <center>
                        <button class="btn btn-success" type="submit">Lacak Surat</button>
                    </center>
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
