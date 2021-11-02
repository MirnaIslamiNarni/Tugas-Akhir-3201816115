@extends('layouts/header')

@section('title', 'Login')

@section('content')

<div class="position-absolute top-50 start-50 translate-middle">

    <div class="text-center">
        <img src="{{ asset('asset/image/logo.png') }}" class="rounded img_logo " alt="...">
        <br>
        <p>Kepri Kost dan Kontrakan</p>
        <br>
        <h1>LOGIN</h1>
    </div>

    <!-- Login Form-->
    <div class="card" style="width: 20rem; height: 20rem;">
        <div class="card-body color_daftar">
            <div class="text-center">
            @if(session('gagal'))
                <div class="alert alert-danger" role="alert">
                    {{session('gagal')}}
                </div>
            @endif
                    <form action="/postlogin" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label sr-only">Email</label>
                            <input name="email" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input name="password" type="password" class="form-control" required>
                        </div>
                            <input name="verifikasi" type="hidden" value="1" class="form-control">
                        <br>
                        <a href="/register">Belum Punya akun? Silahkan Daftar disini</a>
                        <br><br><br>
                        <button type="submit" class="btn btn-danger">Masuk</button>
                        
                </form>
            </div>
        </div>
    </div>

    @endsection
