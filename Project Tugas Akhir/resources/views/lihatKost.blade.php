@extends('layouts/header')

@section('title', 'Index')

@section('content')


<!-- carousell -->
<!-- Flex -->
<!-- Card Gambar Kost -->

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row" style="padding:60px;">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="profile-header">
									<div class="text-center">
                  <h1> Detail Informasi Kost/Kontrakkan </h1>
                  </div>
										<div class="row">
											<div class="col-md-4 stat-item">
                      @if ($detailkost->gambar1 == NULL)
                        <img src="/images/default.jpg" style="width: 100%;">
                      @else
												<img src="/images/{{ $detailkost->gambar1 }}" style="width: 100%;">
                      @endif
											</div>
											<div class="col-md-4 stat-item">
                      @if ($detailkost->gambar2 == NULL)
                        <img src="/images/default.jpg" style="width: 100%;">
                      @else
												<img src="/images/{{ $detailkost->gambar2 }}" style="width: 100%;">
                      @endif
											</div>
											<div class="col-md-4 stat-item">
                      @if ($detailkost->gambar2 == NULL)
                        <img src="/images/default.jpg" style="width: 100%;">
                      @else
												<img src="/images/{{ $detailkost->gambar3 }}" style="width: 100%;">
                      @endif
											</div>
									</div>
								</div>
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Nama Kos/Kontrakan</th>
                                        <td>:</td>
                                        <td>{{ $detailkost->nama_kos }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kota</th>
                                        <td>:</td>
                                        <td>{{ $detailkost->kota }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>:</td>
                                        <td>{{ $detailkost->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Khusus</th>
                                        <td>:</td>
                                        <td>{{ $detailkost->khusus }}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>:</td>
                                        <td>{{ $detailkost->harga }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fasilitas</th>
                                        <td>:</td>
                                        <td>{!! $detailkost->fasilitas !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Aturan</th>
                                        <td>:</td>
                                        <td>{!! $detailkost->aturan !!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="/" class="btn btn-warning btn-sm">Kembali</a>
                                            <a href="/login" class="btn btn-primary btn-sm">Pesan</a>
                                        </td>
                                    </tr>
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
@endsection