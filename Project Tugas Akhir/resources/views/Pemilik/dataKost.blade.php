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
                                        <th class="text-center">Nama Kost atau kontrakan</th>
                                        <th class="text-center">Pemilik</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Khusus</th>
                                        <th class="text-center">Telp</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Aksi</h>
										</tr>
										</thead>
										<tbody>
                                        @foreach($kost as $kosts)
                                        <tr>
                                        @if ($kosts->pemilik_id == Auth::user()->id)
                                            <td>{{ $kosts    ->  nama_kost_atau_kontrakan  }}      </td>
                                            <td>{{ $kosts    ->  nama    }}      </td>
                                            <td>{{ $kosts    ->  kota       }}      </td>
                                            <td>{{ $kosts    ->  khusus     }}      </td>
                                            <td>{{ $kosts    ->  telepon    }}      </td>
                                            <td>{{ $kosts    ->  harga      }}      </td>
                                            <td><img src="/images/{{$kosts->gambar1}}" width="100"></td>
                                            <td>
                                            
                                            <a href="/Pemilik/detailKost/{{$kosts->id}}" 
                                                class = "btn btn-info btn-sm">Lihat</a>

                                            <a href="/Pemilik/editData/{{$kosts->id}}" 
                                                class = "btn btn-warning btn-sm">Edit</a>

                                            <a href="#" 
                                                class = "btn btn-danger btn-sm delete"  hapus-id="{{$kosts->id}}">Hapus</a>
                                                
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

@section('footer')
    <script>
    $('.delete').click(function(){
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
            window.location = "/Pemilik/hapus/"+hapus_id;
        }
        });
            });
    </script>
@stop