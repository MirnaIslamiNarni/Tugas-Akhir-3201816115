@extends('layouts/master')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                {{session('sukses')}}
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-warning" role="alert">
                {{session('error')}}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                    <img src = "">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Siswa</h3>
                                    <div class="right">
                                    <a href="/siswa/exportExel">Eksport</a>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                        <i class="lnr lnr-plus-circle"></i>
                                    </button>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
                                        <th>Judul</th>
                                        <th>ID Kategori</p></th>
                                        <th>Artikel</p></th>
                                        <th>Aksi</th>
										</tr>
										</thead>
										<tbody>
                                        @foreach($data_post as $post)
                                        <tr>
                                            <td>{{$post->judul}}</td>
                                            <td>{{$post->kategori_id}}</td>
                                            <td>{!!$post->artikel!!}</td>
                                            <td>
                                            <a href="/site/{{$post->id}}/detail" class = "btn btn-info btn-sm">Lihat</a>
                                            <a href="/post/{{$post->id}}/edit" class = "btn btn-warning btn-sm">Edit</a>
                                            <a href="/post/{{$post->id}}/delete" class = "btn btn-danger btn-sm delete" post-id = "{{$post->id}}">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
    <form action = "/post/create" method = "POST" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            value = ""> <!-- Merekam inputan sebelumnya agar tidak hilang saat POP UP di tutup  -->
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Artikel</label>
            <textarea name="artikel" class="form-control" id="content" rows="3"></textarea>
        </div>
        
        <div class="form-group">
            <label></label>Kategori</label>
            <select name="kategori_id" id="" class="form-control">
                @foreach ($kategoris as $kategori)
                    <option value ="{{$kategori->id}}">{{$kategori->nama}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="file" name="avatar" class="form-control" id="exampleCheck1"
            value = "">
                <span class="help-block"></span>
		</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        </div>
    </div>
@stop

@section('footer')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
        $(document).ready(function(){
            $('#lfm').filemanager('image');
        })
</script>
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