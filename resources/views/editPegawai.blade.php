@extends('layouts.app')

@section('content')
  
   <div class="col-md-8 col-md-offset-2">
   
    <form action="update" method="post">
        <center><h3>Form Edit Petugas</h3></center>
        
          <div class="form-group">
           {{ csrf_field() }}
            <label for="name" class="cols-sm-2 control-label"><h3>ID Petugas : {{ $postdata->id }}</h3></label>
        </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Nama</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $postdata->nama }}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Email</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $postdata->email }}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Password</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                    <input type="password" class="form-control" name="password" id="password" value="{{ $postdata->password }}" />
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="cols-sm-2 control-label">Jabatan</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $postdata->jabatan }}" />
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
