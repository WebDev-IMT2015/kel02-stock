@extends('layouts.app')

@section('content')

<div class="container">
            <div class="row">
                <div class="col-md-20">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>DATA PEGAWAI KE {{ $post->id }}
                        </h2>
                        </div>

                        <div class="panel-body">
                            <form action="{{ route('barang.update', $post->id) }}" method="post"> 
                <div class ="col-md-15">
                <label for="id">ID PEGAWAI:</label>
                    <textarea type="text" class="form-control input-md" id="id" name="id" rows="1" style="resize:none;">{{ $post->nim }}</textarea>

                    <label for="nama">NAMA PEGAWAI:</label>
                    <textarea type="text" class="form-control input-md" id="nama" name="nama" rows="1">{{ $post->nama }}</textarea>

                    <label for="jurusan">ALAMAT PEGAWAI:</label>
                    <textarea type="text" class="form-control input-md" id="jurusan" name="jurusan" rows="1">{{ $post->jurusan }}</textarea>

                    <label for="angkatan">STATUS PEGAWAI:</label>
                    <textarea type="text" class="form-control input-md" id="angkatan" name="angkatan" rows="1">{{ $post->angkatan }}</textarea>

                    <label for="password">KONTAK PEGAWAI:</label>
                    <textarea type="text" class="form-control input-md" id="password" name="password" rows="1">{{ $post->password }}</textarea> 
                                
                    <label for="password">   </label>
                   </div> 
                   <label for="password">   </label>
                   </div> 

                    <div class="row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-4">
                                <a href="{{  route('mahasiswa.show', $post->id, 'Cancel')  }}" class="btn btn-danger btn-block"> Cancel</a>
                            </div>
                        <div class="col-sm-2">
                            </div>
                            <div class="col-sm-4">
                                 <button type="submit" class="btn btn-success btn-block">Save Changes</button>
                            </div>
                            <div class="col-sm-1">
                            </div>
                    </div>

           <input type="hidden" name="_method" value="PUT">
           <input type="hidden" name="_token" value="{{ Session::token() }}">  <!-- HARUS PAKE INI SUPAYA GA TOKEN ERROR EXXEPTION-->
          </form>
                        </div>
                    </div>
                </div>
        </div>

@endsection