<?php
//Admin
Route::get('/Admin/dataUser', 'AdminController@tampilDataUser');
Route::get('/Admin/dataUser2', 'AdminController@tampilDataUser2');
Route::get('/Admin/dataUserBaru', 'AdminController@tampilDataUserBaru');
Route::get('/Admin/dataKostAll', 'AdminController@tampilDataKost');
Route::get('/Admin/dataKontrakanAll', 'AdminController@tampilDataKontrakkan');
Route::get('/Admin/detailKost', 'AdminController@tampilDetailKost');
Route::get('/Admin/detailKontrakkan', 'AdminController@tampilDetailKontrakkan');
Route::get('/Admin/dataTransaksiKost', 'AdminController@dataTransaksiKost');
Route::get('/Admin/dataTransaksiKontrakkan', 'AdminController@dataTransaksiKontrakkan');
Route::get('/Admin/editData/{id}', 'AdminController@edit');
Route::post('/Admin/updateData/{id}', 'AdminController@update');
Route::get('/Admin/hapus/{id}', 'AdminController@hapus');
Route::get('/Admin/detailKost/{id}', 'AdminController@detailKost');
Route::get('/Admin/detailKontrakkan/{id}', 'AdminController@detailKontrakkan');
Route::get('/Admin/hapusUser/{id}', 'AdminController@hapusUser');
Route::get('/Admin/hapusUser2/{id}', 'AdminController@hapusUser2');
Route::get('/Admin/hapusUserBaru/{id}', 'AdminController@hapusUserBaru');
Route::get('/Admin/verifikasi/{id}', 'AdminController@verifikasi');


//Pemilik
Route::get('/Pemilik/dataKost', 'PemilikController@tampilDataKost');
Route::get('/Pemilik/detailKost/{id}', 'PemilikController@detailKost');
Route::post('/Pemilik/updateData/{id}', 'PemilikController@update');
Route::get('/Pemilik/tambahData', 'PemilikController@halamanTambah');
Route::post('/Pemilik/tambahData/tambah','PemilikController@tambah');
Route::get('/Pemilik/editData/{id}', 'PemilikController@edit');
Route::get('/Pemilik/hapus/{id}','PemilikController@hapus');
Route::get('/Pemilik/dataPesanan', 'PemilikController@dataPemesan');
Route::get('/Pemilik/dataTransaksi', 'PemilikController@transaksi');
Route::get('/Pemilik/verifikasi/{id}', 'PemilikController@verifikasi');
Route::get('/Pemilik/hapusTransaksi/{id}','PemilikController@hapusTransaksi');

//Semua User
Route::get('/dashboard', 'DashboardController@dashboard');
Route::get('/register', 'RegisterController@halamanRegister');
Route::post('/register/tambah', 'RegisterController@tambah');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/lihatKost/{id}', 'indexController@detailKost');
Route::get('/textPesan', 'RegisterController@text');

//Pelanggan
Route::get('/Customer/delete/{id}', 'PelangganController@hapusPesanan');
Route::get('/Customer/daftarKosts', 'PelangganController@daftarKost');
Route::get('/Customer/detailKost/{id}', 'PelangganController@detail');
Route::get('/Customer/pesanKost/{id}', 'PelangganController@pesan');
Route::post('/Customer/pesanKost/setuju', 'PelangganController@setuju');
Route::get('/Customer/daftarPesanan', 'PelangganController@tampilPesanan');
Route::get('/Customer/pesan', 'PelangganController@pesanBerhasil');

//Pelanggan Upload Identitas
Route::get('/Customer/uploadData', 'PelangganController@tampilDataUser');
Route::post('/Customer/uploadData/upload', 'PelangganController@upload');

//Pelanggan Transaksi
Route::get('/Customer/transaksi/{id}', 'PelangganController@uploadBukti');
Route::post('/Customer/transaksi/simpan', 'PelangganController@simpanBukti');
Route::get('/Customer/dataTransaksi', 'PelangganController@transaksi');

// route indexController
Route::get('/', 'indexController@index' )->name('index');
Route::get('/lupapassword', 'indexController@lupapassword' );
Route::post('/updatepassword', 'indexController@updatepassword' );
