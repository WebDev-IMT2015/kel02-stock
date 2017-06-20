@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>Daftar Petugas</center>
                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Jabatan</td>
                                <td>Actions</td>
                            </tr>
                               
                                @foreach ($model as $petugas){
                                <tr>
                                    <td>{{ $petugas->id }}</td>
                                    <td>{{ $petugas->nama }}</td>
                                    <td>{{ $petugas->email }}</td>
                                    <td>{{ $petugas->jabatan }}</td>
                                    <td>
                                        <form action="edit&<?php echo $petugas->id ?>" method="get"><input type="submit" value="Edit" class="btn btn-warning"></form>
                                        <form action="hapus&<?php echo $petugas->id ?>" method="post"><input type="submit" value="Delete" class="btn btn-danger">
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