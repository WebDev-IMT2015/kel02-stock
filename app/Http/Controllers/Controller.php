<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    function insert(Request $req){
        $nama = $req->input('name');
        $harga = $req->input('harga');
        $jumlah = $req->input('jumlah');
        
        $data = array('name'=>$nama,'harga'=>$harga,'jumlah'=>$jumlah);
        
        DB::table('barang')->insert($data);
        
        echo "Berhasil";
    }
}
