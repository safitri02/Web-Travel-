<!doctype html>
<html lang="en">
@yield('head')
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('asset/css/base.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Link Fonts --}}
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">


    <title>@yield('title')</title>
  </head>
  <body>

@yield('navbar')
{{-- Untuk Navbar --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="nav navbar-nav menu_nav mx-auto">
      <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
      <li class="nav-item"><a class="nav-link" href="/eksplorasi">Eksplorasi</a> 
      <li class="nav-item"><a class="nav-link" href="/destinasi">Wisata Daerah</a></li>
      {{-- <li class="nav-item"><a class="nav-link" href="/kuliner">Kulineran</a></li> --}}
      <li class="nav-item"><a class="nav-link" href="/tentang">Tentang</a>
      <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
      {{-- <li class="nav-item"><a class="nav-link akhir" style="color:white;" href="">Booking</a></li> --}}
    </ul>
  </div>
</nav>
{{-- End Navbar --}}

@yield('content')

<div> </div>



@yield('footer')
<div class="footer">
<div class="container">
<div class="row">
  <div class="col-md-3 text">
    <h4>Travelify</h4>
    <p>Jl. Kartini no 23 kota Rembang blok 32</p>
  </div>
   <div class="col-md-3 text">
    <h4>Informasi</h4>
    <p><a href="/">Beranda</a></p>
    <p><a href="/eksplorasi">Eksplorasi</a></p>
    <p><a href="/destinasi">Wisata Daerah</a></p>
    <p><a href="/hotel_dan_resto">Hotel & Restoran</a></p>
    <p><a href="/tentang">Tentang</a></p>
    <p><a href="/kontak">Kontak</a></p>
  </div>
   <div class="col-md-3 text">
   <h4>Sosial Media</h4>
    <p>Email : safitri1337@gmail.com</p>
    <p>Instagram : <a href="https://www.instagram.com/im.safitri_/">Safitri</a> </p>
    <p>Facebook : <a href="https://web.facebook.com/Fitri1337/">Safitri </a></p>
    <p>Github : <a href="http://github.com/safitri02">Safitri</a></p>  
  </div>
   <div class="col-md-3 text">
   <h4>Butuh Bantuan?</h4>
   Silahkan hubungi kami sekarang juga!
  </div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>

  </body>
</html>