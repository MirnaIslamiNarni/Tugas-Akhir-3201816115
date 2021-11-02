@extends('layouts/master')

@section('content')

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Elements</h3>
            <div class="row">
                <div class="col-md-6">
                    <!-- INPUTS -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/Customer/transaksi/simpan" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <input type="hidden" name="pelanggan_id" class="form-control" placeholder="text field"
                                    value="{{ auth()->user()->id }}">
                                <input type="hidden" name="nama" class="form-control" placeholder="text field"
                                    value="{{ auth()->user()->name }}">
                                <input type="hidden" name="pemilik_id" class="form-control" placeholder="text field"
                                    value="{{ $tampil_data->pemilik_id }}">
                                <input type="hidden" name="kos_id" class="form-control" placeholder="text field"
                                    value="{{ $tampil_data->kos_id }}">
                                <input type="hidden" name="tipe" class="form-control" placeholder="text field"
                                    value="{{ $tampil_data->tipe }}">
                                <input type="hidden" name="verifikasi" class="form-control" placeholder="text field"
                                    value="0">
                                <input type="hidden" name="ktp" class="form-control" value="{{ auth()->user()->ktp }}" required>
                                <br>
                                <label>Upload Bukti Pembayaran</label>
                                 <input type="file" name="bukti" class="form-control" required>
                                <button type="submit" name="submit" class="btn-primary">Kirim</button>
                                <a href="https://wa.me/{{ $tampil_data->telepon }}"><button class="btn-success">Hubungi Pemilik Kost/Kontrakkan</button></a>
                            </form>
                        </div>
                    </div>
                    <!-- END INPUTS -->
                    <!-- END INPUT SIZING -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@stop
