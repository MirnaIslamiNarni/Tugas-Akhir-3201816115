@extends('layouts/master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            @if(session('sukses'))
                <div class="alert alert-primary" role="alert">
                    {{ session('sukses') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">
                            <!--tambahData adalah nama Folder
                            tambah adalah nama function untuk menginput data yang user request -->
                            <form action="/Admin/updateUser/{{ $user->id }}" method="POST"
                                enctype="multipart/form-data">
                                <!--enctype"=multipart/form-data" untuk mengubah data upload FOTO (STRING) menjadi OBJEK -->
                                {{ csrf_field() }}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input name="name" type="text" class="form-control"
                                            value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="email" type="text" class="form-control"
                                            value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" value="{{ $user->alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telepon</label>
                                        <input name="telepon" type="text" class="form-control"
                                            value="{{ $user->telepon }}">
                                    </div>
                                                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input name="password" type="text" class="form-control"
                                            value="{{ $user->password }}">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                <div class="modal-footer">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

    @section('footer')
    <script>
        ClassicEditor
            .create(document.querySelector('#fasilitas'))
            .catch(error => {
                console.error(error);
            });

    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#aturan'))
            .catch(error => {
                console.error(error);
            });

    </script>
    @stop
