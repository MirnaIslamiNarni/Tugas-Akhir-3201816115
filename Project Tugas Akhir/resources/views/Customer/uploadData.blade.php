@extends('layouts/master')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Nama Pelanggan</th>
                                        <td>:</td>
                                        <td>{{ $dataUser->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>:</td>
                                        <td>{{ $dataUser->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>:</td>
                                        <td>{{ $dataUser->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                        <td>:</td>
                                        <td>{{ $dataUser->telepon }}</td>
                                    </tr>
                                    <tr>
                                        <form action="/Customer/uploadData/upload" method="POST" enctype="multipart/form-data">
                                            <!--enctype"=multipart/form-data" untuk mengubah data upload FOTO (STRING) menjadi OBJEK -->
                                            {{ csrf_field() }}
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kartu Tanda Penduduk</label>
                                                    <input type="file" name="ktp" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <br>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                        </form>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop
