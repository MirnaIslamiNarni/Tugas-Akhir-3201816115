@extends('layouts/header')

@section('title', 'Index')

@section('content')


<!-- carousell -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('asset/image/k1.jpg') }}" class="caro w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('asset/image/k2.jpg') }}" class="caro w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('asset/image/k3.jpg') }}" class="caro w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> <br>

<!-- Navbar -->
<nav class="navbar navbar-light fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('asset/image/logo.png') }}" alt="" width="50" height="50" class="d-inline-block align-text-top brand_img">
      <br>
      <p class="textLogo">Kepri Kost dan Kontrakan</p>
    </a>

    <ul class="nav justify-content-end">
    <li class="nav-item">
    <a class="btn btn-primary" href="/login" role="button">Login</a>
    </li>
    <li class="nav-item">
    <a class="btn btn-success margin_left" href="/register" role="button">Daftar</a>
    </li>
    </ul>
</nav>


<!-- Flex -->
<div class="container">
<div class="d-flex justify-content-around">
<form action="/" method="GET" enctype="multipart/form-data" class="row g-3">
            <div class="col-auto">
                <select class="form-control" name="cari">
                    <option value="#">Kategori Kota/Kabupaten</option>
                    <option value="Pontianak">Pontianak</option>
                    <option value="Singkawang">Singkawang</option>
                </select>
            </div>
  <div class="col-auto">
    <input name="cari2" type="text" class="form-control" id="inputPassword2" placeholder="Kategori Kost/Kontrakkan">
  </div>
  <div class="col-auto">
    <input name="cari3" type="text" class="form-control" id="inputPassword2" placeholder="Kategori Harga">
  </div>
    <div class="col-auto">
    <button class="btn btn-primary mb-3"><i class="lnr lnr-home"></i>Cari</button>
  </div>
  <div class="col-auto">
    <a href = "/" class="btn btn-success mb-3"><i class="lnr lnr-home"></i>Reload</a>
  </div>
</form>
</div>
</div>

<!-- Card Gambar Kost -->
<div class="container">
<div class="row row-cols-1 row-cols-md-4 g-4">
@foreach ($kost as $kosts)
  <div class="col">
    <div class="card h-100">
    @if ($kosts->gambar1 ==NULL)
     <a href = "/lihatKost/{{$kosts->id}}">
     <img src="/images/default.jpg"  width="200"height="200" class="card-img-top" alt="...">
     </a>
    @else
      <a href = "/lihatKost/{{$kosts->id}}">
      <img src="/images/{{$kosts->gambar1}}"  width="200"height="200" class="card-img-top" alt="...">
      </a>
    @endif
      <div class="card-body">
        <h5 class="card-title">{{$kosts->nama_kos}}</h5>
        <p class="card-text">{{$kosts->tipe}}</p>
        <p class="card-text">{{$kosts->kota}}, {{$kosts->alamat}}</p>
      </div>
    </div>
  </div>
@endforeach
</div>
<br>
  <div class="d-flex justify-content-around">
    {{$kost->links()}}
  </div>
</div>
<br><br>
@endsection