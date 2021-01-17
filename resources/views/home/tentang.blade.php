@extends('lay.lay')
@section('title', 'Tentang Travelify')
@section('navbar')
@section('content')

<div class="container">
<div class="tentang" style="margin-top:150px">
<div class="row">
<div class="col-md-6 imgAbout">
    <img src="{{ url('../asset/img/about.jpg') }}" style="width:500px; height:500px;">
</div>
<div class="col-md-6 captAbout">
    <h2 style="font-weight:700;"> Tentang Travelify</h2>
    <p class="mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse accumsan ligula ut blandit tempus. Maecenas aliquam tellus sit amet risus laoreet sodales. Ut dolor quam, viverra ut odio eget, imperdiet lacinia ipsum. Nullam ullamcorper nunc magna, ac scelerisque odio fermentum sed. Praesent lacus sem, efficitur quis justo nec, faucibus commodo ligula. Donec et convallis leo. Nulla tempor sed ante sed facilisis. Quisque feugiat enim nunc, a pretium massa egestas eleifend. Nullam et efficitur neque.</p>
    <a href="/eksplorasi" class="button">Eksplorasi</a>
</div>
</div>
</div>
{{-- End Row --}}

<div class="tim mt-10 mb-10">
<h2 style="font-weight:700; text-align:center;" class="mt-5">Tim Kami</h2>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="mt-4" src="{{ url('../asset/img/ak.jpg') }}">
      <div class="carousel-captiond-none d-md-block">
            <h4 class="mt-3">Safitri</h4>
            <p>Web Developer</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="mt-4" src="{{ url('../asset/img/tim1.jpg') }}">
        <div class="carousel-captiond-none d-md-block">
            <h4 class="mt-3">Sunny Y</h4>
            <p>Mobile & Ios Developer</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="mt-4" src="{{ url('../asset/img/tim2.jpg') }}">
      <div class="carousel-captiond-none d-md-block">
            <h4 class="mt-3">Erika Ebisawa</h4>
            <p>Digital Marketing</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="mt-4" src="{{ url('../asset/img/tim3.jpg') }}">
      <div class="carousel-captiond-none d-md-block">
            <h4 class="mt-3">Clarissa Natalia</h4>
            <p>Produk Designer</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="mt-4" src="{{ url('../asset/img/tim4.jpg') }}">
      <div class="carousel-captiond-none d-md-block">
            <h4 class="mt-3">Hanomi Mariagi</h4>
            <p>Data Analyst</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


</div>

@section('footer')
