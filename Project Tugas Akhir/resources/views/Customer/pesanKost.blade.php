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
                            <form action="/Customer/pesanKost/setuju" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <input type="hidden" name="pelanggan_id" class="form-control" placeholder="text field"
                                    value="{{ auth()->user()->id }}">
                                <input type="hidden" name="nama" class="form-control" placeholder="text field"
                                    value="{{ auth()->user()->name }}">
                                <input type="hidden" name="pemilik_id" class="form-control" placeholder="text field"
                                    value="{{ $pesankost->pemilik_id }}">
                                <input type="hidden" name="kos_id" class="form-control" placeholder="text field"
                                    value="{{ $pesankost->id }}">
                                <input type="hidden" name="tipe" class="form-contro
                                l" placeholder="text field"
                                    value="{{ $pesankost->tipe }}">
                                <label> Nama &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: &ensp;{{$pesankost->nama_kost_atau_kontrakan}} </label> <br>
                                <label> Alamat &emsp;&emsp;&emsp;&emsp;: &ensp;{{$pesankost->alamat}} </label><br>
                                <label> Tipe &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: &ensp;{{$pesankost->tipe}} </label><br>
                                <label> Harga &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &ensp;@currency($pesankost->harga)/Bulan </label><br>
                                <label> Bank &emsp;&emsp;&emsp;&emsp;&emsp;: &ensp;{{$pesankost->bank}} </label><br>
                                <label> Nomor Rekening&nbsp;:&ensp;{{$pesankost->nomor_rekening}} </label>
                                <input type="hidden" name="harga" class="form-control" placeholder="text field"
                                    value="{{ $pesankost->harga }}">
                                <select name="selama" class="form-control">
                                    <option value="1">1 Bulan</option>
                                    <option value="2">2 Bulan</option>
                                    <option value="3">3 Bulan</option>
                                    <option value="4">4 Bulan</option>
                                    <option value="5">5 Bulan</option>
                                    <option value="6">6 Bulan</option>
                                    <option value="7">7 Bulan</option>
                                    <option value="8">8 Bulan</option>
                                    <option value="9">9 Bulan</option>
                                    <option value="10">10 Bulan</option>
                                    <option value="11">11 Bulan</option>
                                    <option value="12">12 Bulan</option>
                                </select>
                                <br>
                                <button type="submit" name="submit" class="btn-primary">Pesan</button>
                                <a href="https://wa.me/{{ $pesankost->telepon }}" class="btn btn-info">Hubungi Pemilik Kost/Kontrakkan</a>
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
