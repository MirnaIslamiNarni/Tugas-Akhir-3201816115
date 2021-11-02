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
                            <form action="/Pemilik/tambahData/tambah" method="POST" enctype="multipart/form-data">
                                <!--enctype"=multipart/form-data" untuk mengubah data upload FOTO (STRING) menjadi OBJEK -->
                                {{ csrf_field() }}
                                <div class="col-md-4">
                                    <input name="pemilik_id" type="hidden" class="form-control"
                                        value="{{ auth()->user()->id }}">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tipe</label>
                                        <select class="form-control" name="tipe" placeholder="Khusus">
                                            <option value="Kost">Kost</option>
                                            <option value="Kontrakkan">Kontrakan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Kost/Kontrakan</label>
                                        <input name="nama_kos" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Pemilik Kost/Kontrakan</label>
                                        <input name="pemilik" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kabupaten/Kota</label>
                                        <select class="form-control" name="kabupaten/kota">
                                            <option value="Kota Batam">Kota Batam</option>
                                            <option value="Kota Tanjung Pinang">Kota Tanjung Pinang</option>
                                            <option value="Kabupaten Karimun">Kabupaten Karimun</option>
                                            <option value="Kabupaten Natuna">Kabupaten Natuna</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="khusus" placeholder="Khusus">
                                            <option value="Putri">Putri</option>
                                            <option value="Putra">Putra</option>
                                            <option value="Keluarga">Keluarga</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telepon</label>
                                        <input name="telepon" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tampak Depan</label>
                                        <input type="file" name="gambar1" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kamar</label>
                                        <input type="file" name="gambar2" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">WC/Lainnya</label>
                                        <input type="file" name="gambar3" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga</label>
                                        <input name="harga" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <input name="status" type="text" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bank</label>
                                        <select class="form-control" name="bank">
                                            <option value="BCA">BCA</option>
                                            <option value="Mandiri">Mandiri</option>
                                            <option value="Riau">Riau</option>
                                            <option value="BRI">BRI</option>
                                            <option value="BNI">BNI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nomor Rekening</label>
                                        <input name="rek" type="text" class="form-control" required>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fasilitas</label>
                                        <textarea name="fasilitas" id="fasilitas" type="text"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Aturan</label>
                                        <textarea name="aturan" id="aturan" type="text" class="form-control"></textarea>
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
