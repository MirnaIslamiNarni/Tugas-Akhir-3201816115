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
									<table class="table table-hover text-center">
										<thead>
                                        <!-- <th class="text-center">Kode Pelanggan</th>
                                        <th class="text-center">Kode Pemilik Kos</th> -->
                                        <th class="text-center">Kode Pelanggan</th>
                                        <th class="text-center">Bukti Pembayaran</th>
										</tr>
										</thead>
										<tbody>
                                        @foreach($data_transaksi as $data_transaksis)
                                        @if ($data_transaksis->tipe == 'Kost')
                                        <tr>
                                            <td>{{$data_transaksis->pelanggan_id}}</td>
                                            <td><img src="/images/{{ $data_transaksis->bukti }}" width="200"
                                                    height="200"></td>
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

<!--
@section('footer')
    <script>
    //Jika ada class yang bernama delete lalu di klik maka jalankan function() dan tampilkan alert(1) atau pesan
    $('.delete').click(function(){
        //Buat variabel baru siswa_id, This mengacu pada clas yang di klik yaitu .delete kemudia ambil attributnya yaitu siswa_id
        var siswa_id = $(this).attr('siswa-id');
        swal({
        title: "Yakin ?",
        text: "Menghapus data siswa dengan id"+ siswa_id +"?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/siswa/"+siswa_id+"/delete";
        }
        });
            });
    </script>
@stop
        -->