@extends('layouts/master')

@section('content')

		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-12 ">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Basic Table</h3>
								</div>
								<div class="panel-body ">
									<table class="table table-striped table-bordered text-center">
										<thead>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Bukti Pembayaran</th>
                                        <th class="text-center">Kartu Tanda Penduduk</th>
                                        <th class="text-center">Aksi</th>
										</tr>
										</thead>
										<tbody>
                                        @foreach($data_transaksi as $data_transaksis)
                                        @if ($data_transaksis->pemilik_id == Auth::user()->id)
                                        <tr>
                                            <td>{{$data_transaksis->nama}}</td>
                                            <td><img src="/images/{{ $data_transaksis->bukti }}" width="200"
                                                    height="200"></td>
                                            <td><a href="/images/{{ $data_transaksis->ktp }}" download>Download</a></td>
                                            <td>
                                            @if($data_transaksis->verifikasi==0)
                                            <a class="btn btn-primary" href="/Pemilik/verifikasi/{{ $data_transaksis->id }}">Konfirmasi</a>
                                            @else
                                            <a class="btn btn-success" href=" ">Terkonfirmasi</a>
                                            @endif
                                            <a class="btn btn-danger delete" href="#"  hapus-id="{{$data_transaksis->id}}">Hapus</a></td>
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

@section('footer')
    <script>
    $('.delete').click(function(){
        //Buat variabel baru siswa_id, This mengacu pada clas yang di klik yaitu .delete kemudia ambil attributnya yaitu siswa_id
        var hapus_id = $(this).attr('hapus-id');
        swal({
        title: "Yakin ?",
        text: "Menghapus data ini",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/Pemilik/hapusTransaksi/"+hapus_id;
        }
        });
            });
    </script>
@stop