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
                                        <th class="text-center">Kode Pelanggan</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Kode Pemilik</th>
                                        <th class="text-center">Kode Kost/kontrakan</th>
                                        <th class="text-center">Lama Tinggal</th>
                                        <th class="text-center">Harga/Bulan</th>
                                        <th class="text-center">Total</th>
										</tr>
										</thead>
										<tbody>
                                        @foreach($kost as $kosts)
                                        @if ($kosts->pemilik_id == Auth::user()->id)
                                        <tr>
                                            <td>{{$kosts->pelanggan_id}}</td>
                                            <td>{{$kosts->nama}}</td>
                                            <td>{{$kosts->pemilik_id}}</td>
                                            <td>{{$kosts->kos_id}}</td>
                                            <td>{{$kosts->selama}}Bulan</td>
                                            <td>{{$kosts->harga}}</td>
                                            <td>@currency($kosts->selama * $kosts->harga)</td>
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