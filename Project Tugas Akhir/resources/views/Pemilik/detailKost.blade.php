@extends('layouts/master')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
								<div class="profile-header">
									<div class=""></div>
										<div class="row">
											<div class="col-md-4 stat-item">
												<img src="/images/{{ $detailkost->gambar1 }}" style="width: 100%;">
											</div>
											<div class="col-md-4 stat-item">
												<img src="/images/{{ $detailkost->gambar2 }}" style="width: 100%;">
											</div>
											<div class="col-md-4 stat-item">
												<img src="/images/{{ $detailkost->gambar3 }}" style="width: 100%;">
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
                                        <th>Status</th>
                                        <td>:</td>
                                        <td>{{ $detailkost->status }}</td>
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
