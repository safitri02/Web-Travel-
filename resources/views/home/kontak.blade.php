@extends('lay.lay')
@section('title', 'Tentang Travelify')
@section('navbar')
@section('content')
{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid destinasi">
  <div class="container">
     <div class="judul text-center">
    <h1 style="font-weight:700;">Kontak Kami</h1>
    <p class="mt-3"><a href="/" style="color:white;">Beranda</a> > <a href="/kontak" style="color:white;">Kontak</a></p>
    </div>
  </div>
</div>
{{-- End Jumbotron --}}

<div class="container">
  <div class="kontak text-center mt-10 mb-10">
    <div class="row">
      <div class="col-md-3">
      <div class="ikon">
         <img src="{{ url('/asset/img/lokasi.png') }}">
         </div>
         <h5>Alamat</h5>
         <p>Jl. Kartini no 23 kota Rembang blok 32</p>
      </div>
      <div class="col-md-3">
      <div class="ikon">
      <img src="{{ url('/asset/img/phone.png') }}">
      </div>
      <h5>Telephone</h5>
      <p>+62 816655958</p>
      </div>
      <div class="col-md-3">
      <div class="ikon">
      <img src="{{ url('/asset/img/pesan.png') }}">
      </div>
      <h5>Email</h5>
      <p>safitri1337@gmail.com</p>
      </div>
      <div class="col-md-3">
      <div class="ikon">
      <img src="{{ url('/asset/img/web.png') }}">
      </div>
      <h5>Website</h5>
      <p>Travelify.com</p>
      </div>
    </div>
  </div>
</div>


@section('footer')
