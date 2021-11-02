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
                                        <th class="text-center">Nama Kost/Kontrakkan</th>
                                        <th class="text-center">Pemilik</p></th>
                                        <th class="text-center">Kota</p></th>
                                        <th class="text-center">Khusus</th>
                                        <th class="text-center">Telp</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Aksi</th>
										</tr>
										</thead>
										<tbody>
                                        @foreach($kost as $kosts)
                                        <tr>
                                        @if ($kosts->tipe=='Kontrakkan')
                                            <td>{{$kosts->nama_kos}}</td>
                                            <td>{{$kosts->pemilik}}</td>
                                            <td>{{$kosts->kota}}</td>
                                            <td>{{$kosts->khusus}}</td>
                                            <td>{{$kosts->telepon}}</td>
                                            <td>{{$kosts->harga}}</td>
                                            <td><img src="/images/{{$kosts->gambar1}}" width="100"></td>
                                            <td>
                                            <a href="/Admin/detailKontrakkan/{{$kosts->id}}" class = "btn btn-info btn-sm">Lihat</a>
                                            <a href="/Admin/editData/{{$kosts->id}}" class = "btn btn-warning btn-sm">Edit</a>
                                            <a href="/Admin/hapus/{{$kosts->id}}" class = "btn btn-danger btn-sm delete" post-id = "{{$kosts->id}}">Hapus</a>
                                            </td>
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