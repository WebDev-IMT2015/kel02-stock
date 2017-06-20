<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\datapegawai;

use Illuminate\Support\Facades\Input;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = datapegawai::all();
        return view('daftarpegawai')->withModel($model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePegawai(Request $request)
    {
        $model = datapegawai::all();
        
        $pegawai = new datapegawai;
        $pegawai->nama = Input::get('name');
        $pegawai->email = Input::get('email');
        $pegawai->password = Input::get('password');
        $pegawai->jabatan = Input::get('jabatan');
        
        $pegawai->save();
        return view('tambahpegawai')->withModel($model);
        //return view('daftarpegawai')->withModel($model);
        //return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $post = datapegawai;
        //$pegawai['data']= DB::table('datapegawai')->get();
        //return view('daftarpegawai',$pegawai);
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
        $post = datapegawai::find($id);
        
        if($post != null){
            $post->delete();
            return redirect('daftarpegawai')->with('hapus','berhasil dihapus');
        }
    }
}
