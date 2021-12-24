@section('suratkeluar','active')

@extends('template')

@section('content')
    <div class="page-content">
        <section id="cari">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Surat Keluar</h3>

                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Surat</th>
                                        <th>Nama Siswa</th>
                                        <th>NISN</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>Jenis Surat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="idtbody">
                                    @foreach($data as $y => $x)
                                        <tr>
                                            <td>{{$y+1}}</td>
                                            <td>PS-{{$x->id}}</td>
                                            <td>{{$x->nama_siswa}}</td>
                                            <td>{{$x->nisn}}</td>
                                            <td>{{$x->kelas}}</td>
                                            <td>{{$x->alamat}}</td>
                                            <td>{{$x->jenis_surat}}</td>
                                            <td>
                                                {{ucfirst($x->status)}}
                                            </td>
                                            <td>
                                                <button class="btn btn-info" onclick="tambah({{$x}})"> Lihat</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade text-left" id="modaltambah" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">
                        @if(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'resepsionis')
                            Terima Pengajuan
                        @elseif(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'stafTu')
                            Unggah Pengajuan
                        @else
                            Lihat Data Pengajuan Surat
                        @endif
                    </h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                @if(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'resepsionis')
                    <form action="/suratkeluar/terima" method="POST" enctype="multipart/form-data">
                @elseif(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'stafTu')
                    <form action="/suratkeluar/unggah" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="modal-body">
                        <input name="id" hidden id="idnya">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Id. Pengajuan</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="id_pengajuan" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Nama Siswa</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="nama" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">NISN</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="nisn" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Kelas</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="kelas" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Alamat</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="alamat" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Tempat Lahir</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="tempatlahir" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Tanggal Lahir</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="tgllahir" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="jk" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Jenis Surat</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="jenissurat" readonly>
                            </div>
                        </div>
                        <br>
                        @if(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'resepsionis')
                            <button type="submit" class="btn btn-success ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Terima</span>
                            </button>
                        @elseif(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'stafTu')
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Unggah</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="file" name="surat" class="form-control" accept="application/pdf" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Unggah</span>
                            </button>
                        @endif
                        <button type="button" class="btn btn-warning"
                                data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Batal</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <link rel="stylesheet" href="/assets/vendors/simple-datatables/style.css">
@endpush

@push('js')

    <script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);

        function tambah(data){
            $('#id_pengajuan').val('PS-' + data.id)
            $('#idnya').val(data.id)
            $('#nama').val(data.nama_siswa)
            $('#nisn').val(data.nisn)
            $('#kelas').val(data.kelas)
            $('#alamat').val(data.alamat)
            $('#tempatlahir').val(data.tempat_lahir)
            $('#tgllahir').val(data.tanggal_lahir)
            $('#jk').val(data.jenis_kelamin)
            $('#jenissurat').val(data.jenis_surat)
            $('#modaltambah').modal('show')
        }
    </script>
@endpush
