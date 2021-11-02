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
                            <form action="/Admin/updateData/{{ $kost->id }}" method="POST"
                                enctype="multipart/form-data">
                                <!--enctype"=multipart/form-data" untuk mengubah data upload FOTO (STRING) menjadi OBJEK -->
                                {{ csrf_field() }}
                                <div class="col-md-4">
                                    <input name="pemilik_id" type="hidden" class="form-control"
                                        value="{{ $kost->pemilik_id }}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tipe</label>
                                        <select class="form-control" name="tipe" placeholder="Khusus">
                                            <option value="Kost">Kost</option>
                                            <option value="Kontrakkan">Kontrakkan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Kost/Kontrakan</label>
                                        <input name="nama_kos" type="text" class="form-control"
                                            value="{{ $kost->nama_kos }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Pemilik Kost/Kontrakan</label>
                                        <input name="pemilik" type="text" class="form-control"
                                            value="{{ $kost->pemilik }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kabupaten/Kota</label>
                                        <input name="kota" type="text" class="form-control" value="{{ $kost->kota }}">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="khusus" placeholder="Khusus">
                                            <option value="Putri">Putri</option>
                                            <option value="Putra">Putra</option>
                                            <option value="Campur">Campur</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name="alamat" type="text" class="form-control"
                                            value="{{ $kost->alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telepon</label>
                                        <input name="telepon" type="text" class="form-control"
                                            value="{{ $kost->telepon }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="gambar1" class="form-control"
                                            value="{{ $kost->gambar1 }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="gambar2" class="form-control"
                                            value="{{ $kost->gambar2 }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="gambar3" class="form-control"
                                            value="{{ $kost->gambar3 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga</label>
                                        <input name="harga" type="text" class="form-control"
                                            value="{{ $kost->harga }}">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fasilitas</label>
                                        <textarea name="fasilitas" id="fasilitas" type="text"
                                            class="form-control">{{ $kost->fasilitas }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Aturan</label>
                                        <textarea name="aturan" id="aturan" type="text"
                                            class="form-control">{{ $kost->aturan }}</textarea>
                                    </div>
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
