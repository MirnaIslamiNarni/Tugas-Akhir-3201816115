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
                                @if(session('success'))
									<p  class="alert alert-primary" role="alert">{{session('success')}}</p>
                                @endif
								</div>
								<div class="panel-body">
									<table class="table table-hover text-center">
										<thead>
                                        <!-- <th class="text-center">Kode Pelanggan</th>
                                        <th class="text-center">Kode Pemilik Kos</th> -->
                                        <th class="text-center">Kode Kos</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Lama Tinggal</th>
                                        <th class="text-center">Harga/Bulan</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Upload Bukti Pembayaran</th>
                                        <th class="text-center">Aksi</th>
										</tr>
										</thead>
										<tbody>
                                        @foreach($daftarPesan as $daftarPesans)
                                        @if ($daftarPesans->pelanggan_id == Auth::user()->id)
                                        <tr>
                                            <!-- <td>{{$daftarPesans->pelanggan_id}}</td>
                                            <td>{{$daftarPesans->pemilik_id}}</td> -->
                                            <td>{{$daftarPesans->kos_id}}</td>
                                            <td>{{$daftarPesans->nama}}</td>
                                            <td>{{$daftarPesans->selama}} Bulan</td>
                                            <td>@currency($daftarPesans->harga)</td>
                                            <td>@currency($daftarPesans->selama * $daftarPesans->harga)</td>
                                            <td><a href="/Customer/transaksi/{{$daftarPesans->id}}" class = "btn btn-warning btn-sm">Upload</a></td>
                                            <td><a class="btn btn-danger delete" href="#"  hapus-id="{{$daftarPesans->id}}">Hapus</a></td>
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
    //Jika ada class yang bernama delete lalu di klik maka jalankan function() dan tampilkan alert(1) atau pesan
    $('.delete').click(function(){
        //Buat variabel baru siswa_id, This mengacu pada clas yang di klik yaitu .delete kemudia ambil attributnya yaitu siswa_id
        var hapus_id = $(this).attr('hapus-id');
        swal({
        title: "Yakin ?",
        text: "Menghapus data ini?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/Customer/delete/"+hapus_id;
        }
        });
            });
    </script>
@stop