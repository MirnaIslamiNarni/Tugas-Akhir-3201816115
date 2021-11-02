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
                                        <th class="text-center">Nama</p></th>
                                        <th class="text-center">Email</p></th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Telepon</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">KTP</th>
                                        <th class="text-center">Aksi</th>
										</tr>
										</thead>
										<tbody>
                                        @foreach($user as $users)
                                        @if($users->tipe==1 && $users->verifikasi==1)
                                        <tr>
                                            <td>{{$users->name}}</td>
                                            <td>{{$users->email}}</td>
                                            <td>{{$users->alamat}}</td>
                                            <td>{{$users->telepon}}</td>
                                            <td><button class="btn btn-success">Telah di Konfirmasi</button></td>
                                            <td><a href="/images/{{ $users->ktp }}" download>Unduh</a></td>
                                            <td><a href="#" class = "btn btn-danger btn-sm delete" hapus-id="{{$users->id}}">Hapus</a>
                                        </tr>
                                        @else
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
        text: "Menghapus data ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/Admin/hapusUserBaru/"+hapus_id;
        }
        });
            });
    </script>
@stop