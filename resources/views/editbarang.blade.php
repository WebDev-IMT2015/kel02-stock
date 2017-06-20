@extends('layouts.app')

@section('content')
  
   <div class="col-md-8 col-md-offset-2">
   
    <form action="updatebr&{{ $postdata }}" method="post">
        <center><h3>Form Edit Barang</h3></center>
        <div class="form-group">
           {{ csrf_field() }}
            <label for="name" class="cols-sm-2 control-label" value=""><h3>ID Barang : {{ $postdata->id }}</h3> </label>
        </div>
        
        <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Nama Barang</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $postdata->nama }}"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="confirm" class="cols-sm-2 control-label">Deskripsi Barang</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{ $postdata->deskripsi }}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Harga Barang (Rp)</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="harga" id="harga" value="{{ $postdata->harga }}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="cols-sm-2 control-label">Jumlah Barang</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ $postdata->jumlah }}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="confirm" class="cols-sm-2 control-label">Dari</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="dari" id="dari" value="{{ $postdata->dari }}" />
                </div>
            </div>
        </div>


        <div class="form-group ">
            <input type="submit" name="submit"  class="btn btn-primary btn-lg btn-block login-button" value="Simpan Perubahan">
        </div>

    </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<footer>
    <center>Kelompok 2 @Webdev 2017</center>
</footer>
@endsection
</div>
