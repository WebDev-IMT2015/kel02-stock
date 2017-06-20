@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>Daftar Barang</center>
                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Deskripsi</td>
                                <td>Harga</td>
                                <td>Jumlah</td>
                                <td>Dari</td>
                                <td>Actions</td>
                            </tr>
                               
                                @foreach ($model as $barang){
                                <tr>
                                    <td>{{ $barang->id }}</td>
                                    <td>{{ $barang->nama }}</td>
                                    <td>{{ $barang->deskripsi }}</td>
                                    <td>{{ $barang->harga }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>{{ $barang->dari }}</td>
                                    <td>
                                        <form action="" method="post"><input type="submit" value="Edit" class="btn btn-warning"></form>
                                        <form action="hapusbr&<?php echo $barang->id ?>" method="post"><input type="submit" value="Delete" class="btn btn-danger">
                                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        {{ method_field('DELETE') }}
                                        </form>
                                    </td>
                                    
                                </tr>
                                @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection