<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\daftarbarangs;

use Illuminate\Support\Facades\Input;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = daftarbarangs::all();
        return view('daftarbarang')->withModel($model);
    }
    
    public function indexLaporan()
    {
        $model = daftarbarangs::all();
        return view('laporan')->withModel($model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new daftarbarangs;
        $barang->nama = Input::get('name');
        $barang->deskripsi = Input::get('deskripsi');
        $barang->harga = Input::get('harga');
        $barang->jumlah = Input::get('jumlah');
        $barang->dari = Input::get('dari');
        
        $barang->save();
        return view('FormInputBarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = daftarbarangs::find($id);
        
        if($post != null){
            $post->delete();
            return redirect('daftarbarang')->with('hapus','berhasil dihapus');
        }
    }
}
