@section('suratmasuk','active')

@extends('template')

@section('content')
    <div class="page-content">
        <section id="cari">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            @if(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'resepsionis')
                            <h3>Data Surat Masuk <button class="btn btn-light-info" style="float: right" onclick="tambah()"><i class="fa fa-plus-square"></i> Tambah</button></h3>
                            @else
                            <h3>Data Surat Masuk</h3>
                            @endif
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Surat</th>
                                        <th>Asal</th>
                                        <th>Perihal</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="idtbody">
                                    @foreach($data as $y => $x)
                                        <tr>
                                            <td>{{$y+1}}</td>
                                            <td>{{$x->no_surat}}</td>
                                            <td>{{$x->asal_surat}}</td>
                                            <td>{{$x->perihal}}</td>
                                            <td>
                                                <button class="btn btn-info" onclick="lihat({{$x}})">Lihat</button>
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
                    <h4 class="modal-title" id="myModalLabel17">Silahkan Isi Data Surat Masuk</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Nomor Surat</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" name="no_surat" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Asal</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" name="asal_surat" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Perihal</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" name="perihal" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Unggah Surat</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="file" class="form-control" name="surat" accept="application/pdf" required>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
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
    <div class="modal fade text-left" id="modallihat" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Lihat Data Surat Masuk</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form>
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Nomor Surat</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="no_surat" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Asal</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="asal_surat" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Perihal</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="perihal" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Surat</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <a class="btn btn-info" id="surat" href="/surat/" target="_blank">Lihat</a>
                            </div>
                        </div>
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

        function tambah(){
            $('#modaltambah').modal('show')
        }

        function lihat(data){
            $('#surat').attr('href','/surat/'+data.file_surat)
            $('#perihal').val(data.perihal)
            $('#asal_surat').val(data.asal_surat)
            $('#no_surat').val(data.no_surat)
            $('#modallihat').modal('show')
        }
    </script>
@endpush
