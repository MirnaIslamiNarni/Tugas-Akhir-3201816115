@extends('layouts/header')

@section('title', 'Register')

@section('content')

<div class="position-absolute top-50 start-50 translate-middle">

    <div class="text-center">
        <img src="{{ asset('asset/image/logo.png') }}" class="rounded img_logo " alt="...">
        <br>
        <p>Kepri Kost dan Kontrakan</p>
        <br>
    </div>

    <!-- Login Form-->
    <div class="card" style="width: 28rem;">
        <div class="card-body color_daftar">
            <div class="text-center">
                <form action="" method="POST" enctype="multipart/form-data">
                    <!--enctype"=multipart/form-data" untuk mengubah data upload FOTO (STRING) menjadi OBJEK -->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <h3 style="color:white;">Selamat Pendaftaran Berhasil<br>Tunggu Verifikasi dari Admin</h3>
                        <p><a style="color:white;" href="/">Halaman Beranda</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>



    @endsection
