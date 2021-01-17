@extends('lay.lay')
@section('title', 'Travelify')
@section('navbar')
@section('content')
{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid destinasi">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
{{-- End Jumbotron --}}

<div class="container mb-10">

{{-- Wisata --}}
<div class="judul text-center mt-10 mb-5">
<h1 style="font-weight:700;">Detail Hotel {{ $hotel->nama_hotel }} </h1>
<p>{{ $hotel->deskripsi }}</p>
</div>

<div class="row">
<div class="col-md-1"></div>
    <div class="col-md-5">
        <img src="{{ url('/storage/'. $hotel->gambar) }}" class="gambar_hotel"> 
    </div>
    <div class="col-md-5">
        <h3>Nama : {{ $hotel->nama_hotel }}</h3>
        <p> Deskripsi : {{ $hotel->deskripsi }}</p>
        <p> Lokasi : {{ $hotel->alamat }}</p>
        <p> Harga Sewa : Rp.{{ number_format($hotel->harga) }}</p>
        <a class="button mt-5" href="/booking_hotel/{{ $hotel->id }}">Booking Sekarang</a>
    </div>
</div>
{{-- End row wisata--}}

</div>
{{-- End Container --}}
@endsection

@section('footer')
