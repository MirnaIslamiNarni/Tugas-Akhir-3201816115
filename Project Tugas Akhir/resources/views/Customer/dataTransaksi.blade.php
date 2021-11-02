@extends('layouts/master')

@section('content')

		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Basic Table</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped table-bordered text-center">
										<thead>
                                        <!-- <th class="text-center">Kode Pelanggan</th>
                                        <th class="text-center">Kode Pemilik Kos</th> -->
                                        <th class="text-center">Kode Pelanggan</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Bukti Pembayaran</th>
                                        <th class="text-center">Keterangan</th>
										</tr>
										</thead>
										<tbody>
                                        @foreach($data_transaksi as $data_transaksis)
                                        @if ($data_transaksis->pelanggan_id == Auth::user()->id)
                                        <tr>
                                            <td>{{$data_transaksis->pelanggan_id}}</td>
                                            <td>{{$data_transaksis->nama}}</td>
                                            <td><img src="/images/{{ $data_transaksis->bukti }}" width="200" height="200"></td>
                                            @if($data_transaksis->verifikasi==1)
                                            <td><button class="btn btn-success">Pembayaran Berhasil</button></td>
                                            @else
                                             <td>><button class="btn btn-warning">Menunggu konfirmasi</button></td>
                                            @endif
                                        </tr>
                                        @endif
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>


<!-- Modal -->
@stop