<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuratKeluarController extends Controller
{
    public function index(){
        $pengguna = Session::get('pengguna');
        if ($pengguna->peran == 'resepsionis'){
            $data = SuratKeluar::where('status','diajukan')->get();
        }else if ($pengguna->peran == 'stafTu'){
            $data = SuratKeluar::where('status','disetujui')->get();
        }else{
            $data = SuratKeluar::all();
        }
        return view('suratKeluar',['data' => $data]);
    }

    public function simpan(Request $request){
        $data = SuratKeluar::create([
            'nama_siswa' => $request->nama_siswa,
            'nisn' => $request->nisn,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jenis_surat' => $request->jenis_surat,
            'status' => 'diajukan',
        ]);
        return redirect('/ajukansurat')->with(['sukses'=>$data->id]);
    }

    public function terima(Request $request){
        $data = SuratKeluar::find($request->id);
        $data->status = 'disetujui';
        $data->save();
        return redirect('/suratkeluar')->with(['sukses'=>'Berhasil']);
    }

    public function unggah(Request $request){
        $surat = md5($request->nomor_surat.$request->perihal.$request->asal_surat.$request->status) . '.pdf' ;
        $request->file('surat')->move('surat',$surat);
        $data = SuratKeluar::find($request->id);
        $data->file_surat = $surat;
        $data->status = 'diunggah';
        $data->save();
        return redirect('/suratkeluar')->with(['sukses'=>'Berhasil']);
    }


}
