<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratLegalisir;
use App\Models\SuratMasuk;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    public function index(){
        return view('home');
    }

    public function surat(){
        return view('pengajuanSurat');
    }

    public function legalisir(){
        return view('pengajuanLegalisir');
    }

    public function lacak(){
        return view('lacak',['status' => null]);
    }

    public function lacakKan(Request $request){
        if (explode('-',$request->nomor)[0] == 'PS'){
            $cek = SuratKeluar::find(explode('-',$request->nomor)[1]);
            if ($cek){
                $status = 'ada';
                $data = $cek;
            }else{
                $status = 'tidakada';
                $data = null;
            }
        }else if (explode('-',$request->nomor)[0] == 'PL'){
            $cek = SuratLegalisir::find(explode('-',$request->nomor)[1]);
            if ($cek){
                $status = 'ada';
                $data = $cek;
            }else{
                $status = 'tidakada';
                $data = null;
            }
        }else{
            $status = null;
            $data = null;
        }

        return view('lacak',['data' => $data, 'status' => $status, 'tipe' => explode('-',$request->nomor)[0]]);
    }
}
