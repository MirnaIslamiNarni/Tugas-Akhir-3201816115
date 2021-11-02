@extends('layouts/master')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                {{session('sukses')}}
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-warning" role="alert">
                {{session('error')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                    <img src = "">
								<div class="panel-heading">
                                    @if(auth()->user()->tipe==2)
                                    <h3 class="panel-title">Selamat Datang</h3>
                                    <p> Untuk Pelanggan Baru, silahkan Melakukan Upload Data KTP terlebih dahulu sebelum Melakukan Pesan Kost atau Kontrakkan </p>
                                    @else
                                    <h3 class="panel-title">Selamat Datang</h3>
                                    @endif
                                    <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                        <i class="lnr lnr-plus-circle"></i>
                                    </button>
                                    </div>
								</div>
								<div class="panel-body">
			
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop