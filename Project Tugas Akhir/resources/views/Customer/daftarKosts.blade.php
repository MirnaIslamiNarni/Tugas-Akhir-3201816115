@extends('layouts/master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <br>
                        <form action="/Customer/daftarKosts" method="GET" enctype="multipart/form-data">
                            <div class="col-md-3">
                            <input name="cari" type="text" class="form-control" id="inputPassword2" placeholder="Kategori Kota/Kabupaten">
                            </div>
                            <div class="col-md-3">
                            <input name="cari2" type="text" class="form-control" id="inputPassword2" placeholder="Kategori Kost/Kontrakkan">
                            </div>
                            <div class="col-md-3">
                            <input name="cari3" type="text" class="form-control" id="inputPassword2" placeholder="Kategori Harga">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Cari</button>
                                <a href = "/Customer/daftarKosts" class="btn btn-success">Refresh</a>
                            </div>
                        </form>
                        <br>
                        <br>

                        <div class="panel-body">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($kost as $kosts)
                                        <tr>
                                            <td width="300"><img src="/images/{{ $kosts->gambar1 }}" width="200"
                                                    height="200"></td>
                                            <td><button
                                                    class="btn btn-danger">{{ $kosts->khusus }}</button></br>{{ $kosts->nama_kost_atau_kontrakan }}</br>{{ $kosts->kota }}</br>{{ $kosts->alamat }}
                                            </td>
                                            <td>@currency($kosts->harga)<br>{{ $kosts->status }}</td>
                                            <td width="-60">
                                                <a href="/Customer/detailKost/{{ $kosts->id }}">
                                                    <button class="btn btn-primary">Detail</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop
