@extends('layouts/header')

@section('title', 'Register')

@section('content')

<div class="position-absolute top-50 start-50 translate-middle">

<div class="text-center">
  <img src="{{ asset('asset/image/logo.jpg') }}" class="rounded img_logo " alt="...">
  <br>
  <p>Kepri Kos dan Kontrakan</p>
  <br>
  <h1>Registrasi</h1>
</div>

<!-- Login Form-->
<div class="card" style="width: 28rem;">
  <div class="card-body color_daftar">
  <div class="text-center">
                            <form action="/register/tambah" method="POST" enctype="multipart/form-data">
                                <!--enctype"=multipart/form-data" untuk mengubah data upload FOTO (STRING) menjadi OBJEK -->
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama *</label>
                                        <input name="name" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Email *</label>
                                        <input name="email" type="email" class="form-control" required>
                                        @if($errors->has('email'))
                                            <span class="help-block">{{$errors->first('email')}}</span>
                                        @endif 
                                    </div>
                                    <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                        <label for="exampleInputEmail1">Password *</label>
                                        <input name="password" type="password" class="form-control" required>
                                        @if($errors->has('password'))
                                            <span class="help-block">{{$errors->first('password')}}</span>
                                        @endif 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Konfirmasi Password *</label>
                                        <input name="konfir_password" type="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat *</label>
                                        <input name="alamat" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telepon *</label>
                                        <input name="telepon" type="number" class="form-control" required>
                                        @if($errors->has('telepon'))
                                            <span class="help-block">{{$errors->first('telepon')}}</span>
                                        @endif 
                                    </div>
                                    <div class="form-group">
                                     <label for="exampleInputEmail1">Peran *</label>
                                        <select class="form-control" name="tipe" placeholder="Sebagai" required>
                                            <option value="1" required>Pemilik Kost/kontrakan</option>
                                            <option value="2" required>Pelanggan</option>
                                        </select>
                                    </div>
                                    <br>
                                    * Wajib diisi
                                    <br>
                                    <button type="submit" class="btn btn-danger">Daftar</button>
                                    <a href = "/" class="btn btn-success">Batal</a>
                                <div class="modal-footer">

    </form>
    </div>
  </div>
</div>



@endsection
