@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>Laporan Keluar-Masuk Barang</center>
                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Jumlah</td>
                                <td>Tanggal & Jam Masuk</td>
                                <td>Tanggal Keluar & Jam Masuk</td>
                                
                            </tr>
                                @foreach ($model as $barang){
                                <tr>
                                    <td>{{ $barang->id }}</td>
                                    <td>{{ $barang->nama }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>{{ $barang->created_at }}</td>
                                    <td></td>
                                    
                                </tr>
                                @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection