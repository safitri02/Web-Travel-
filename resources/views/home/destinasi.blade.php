@extends('lay.lay')
@section('title', 'Travelify')
@section('navbar')
@section('content')
{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid destinasi">
  <div class="container">
   <div class="judul text-center">
    <h1 style="font-weight:700;">Wisata Daerah</h1>
     <p class="mt-3"><a href="/" style="color:white;">Beranda</a> > <a href="/destinasi" style="color:white;">Wisata Daerah</a></p>
    </div>
  </div>
</div>
{{-- End Jumbotron --}}

<div class="container mb-10">

{{-- Wisata --}}

  @foreach($daerah as $d)
  <div class="row justify-content-center">
  <div class="col-md-12">
  <div class="destinasi_wisata" style="border-radius:10px; padding:20px; box-shadow:5px 5px 15px rgba(100,100,100,0.3); margin:20px;">
      <div class="img">
        <img src="{{ url('/storage/'.$d->gambar) }}">
      </div>
      <div class="capt ml-5">
      <h3>{{ $d->nama }}</h3>
      <p style="font-size:16px;">{{ $d->deskripsi }}</p>
      <a href="/destinasi/{{ $d->id }}" class="mt-3"> Selengkapnya </a>
      </div>
  </div>
  </div>
  </div>
  @endforeach
{{-- End row wisata--}}

</div>
{{-- End Container --}}
@endsection

@section('footer')
