@extends('lay.lay')
@section('title', 'Travelify')
@section('navbar')
@section('content')
{{-- Jumbotron --}}
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ url('/asset/img/goa.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Temukan keindahan dan keberagaman budaya negara Indonesia.</h1>
        <p style="font-size:16px;">Travelfy membantu kamu untuk memilih tempat wisata di Indonesia yang kaya akan budaya dan keberagaman serta petualangan yang menunggumu di Indonesia.</p>
         <button class="button mt-3">Exlpore Sekarang</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('/asset/img/makanan.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Kelezatan kuliner Indonesia yang memanjakan lidah-mu dan lezat!</h1>
        <p style="font-size:16px;">Travel to the any corner of the world, without going around in circles</p>
        <button class="button mt-3">Exlpore Sekarang</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('/asset/img/sawah.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
         <h1>Keindahan alam yang di akui Dunia yang bisa kamu liat di Indonesia!</h1>
        <p style="font-size:16px;">Keindahan alam yang dimiliki Indonesia membuatnya diakui dunia sebagai negara terindah di dunia. Memiliki Pantai, Gunung, Tempat Bersejarah dan Wahana Atraksi yang ada di Indonesia yang siap kalian kunjungi kapan saja.</p>
        <button class="button mt-3">Exlpore Sekarang</button>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
{{-- End Jumbotron --}}


<div class="container mb-10">

{{-- Wisata --}}
<div class="judul2 text-center mt-5 mb-5">
<h1 style="font-weight:700;">Tempat Terbaik</h1>
<p>Travelify dapat membantu kamu untuk menacri tempat yang cocok untuk liburanmu!</p>
</div>

<div class="row">
<div class="col-md-4">
  <div class="gambar">
    <img src="{{ url('/asset/img/thumbnail2.jpg') }}">
  </div>
</div>
<div class="col-md-4">
  <div class="gambar">
    <img src="{{ url('/asset/img/thumbnail3.jpg') }}">
  </div>
</div>
<div class="col-md-4">
  <div class="gambar">
    <img src="{{ url('/asset/img/thumbnail4.jpg') }}">
  </div>
</div>
</div>

<div class="about mt-10 mb-5">
<div class="row">
  <div class="col-md">
    <img src="{{ url('asset/img/about.jpg') }}" style="width:500px; height:550px; border-radius:20px">
  </div>
  <div class="col-md">
  <div class="capt ml-5 mt-2">
  <h1 style="font-weight:700">Tentang Travelify</h1>
  <p class="mt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
  </div>
  <div class="row ml-5 mt-5 justify-content-center">
    <div class="col-md">
    <h1>50</h1>
    <p>Lorem Ipsum </p>
    </div>
      <div class="col-md">
      <h1>150</h1>
      <p>Lorem Ipsum </p>
    </div>
  </div>
    <div class="row ml-5 mt-5 justify-content-center">
    <div class="col-md">
      <h1>1000</h1>
      <p>Lorem Ipsum </p>
    </div>
      <div class="col-md">
      <h1>40</h1>
      <p>Lorem Ipsum </p>
    </div>
  </div>
  <button class="button ml-5 mt-5">Exkplore Sekaranag</button>
  </div>
</div>
</div>

<div class="hotel mt-10 mb-10">
{{-- Wisata --}}
<div class="judul2 text-center mt-5 mb-5">
<h1 style="font-weight:700;">Hotel & Restoran</h1>
<p>Travelify juga dapat membantu kamu untuk mencari hotel & restoran yang kamu inginkan!</p>
</div>

<div class="row">
<div class="col-md-4">
  <div class="gambar">
    <img src="{{ url('/asset/img/hnr1.jpg') }}">
  </div>
</div>
<div class="col-md-4">
  <div class="gambar">
    <img src="{{ url('/asset/img/hnr3.jpg') }}">
  </div>
</div>
<div class="col-md-4">
  <div class="gambar">
    <img src="{{ url('/asset/img/hnr2.jpg') }}">
  </div>
</div>
</div>
</div>
{{-- End row Restoran 1 --}}
</div>
{{-- End Container --}}

<div class="gambar_depan">
    <div class="row">
  <div class="col-md-2"><p> <span></span></p></div>
  <div class="col-md-8 subs">
  <div class="mt-2">
    <form method="post" action="#">
    @csrf
    <h2 class="text-center" style="font-weight:700;">Subscribe untuk info terbaru</h2>
      <div class="input-group input-group-lg mt-4">
        <input type="text" class="form-control" placeholder="Masukkan Email Anda">
        <button class="button" type="submit" >Subscribe</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
@endsection

@section('footer')
