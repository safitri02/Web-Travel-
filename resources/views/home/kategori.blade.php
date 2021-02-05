@extends('lay.lay')
@section('title', 'Travelify')
@section('navbar')
@section('content')

{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid destinasi">
  <div class="container">
   <div class="judul text-center">
    <h1 style="font-weight:700;">Wisata Berdasarkan Kategori</h1>
     <p class="mt-3"><a href="/" style="color:white;">Beranda</a> > <a href="/kategori" style="color:white;">Kategori</a></p>
    </div>
  </div>
</div>
{{-- End Jumbotron --}}

<div class="container mb-10">

  @foreach($kat as $k)
  <div class="row justify-content-center">
  <div class="col-md-12">
  <div class="destinasi_wisata" style="border-radius:10px; padding:20px; box-shadow:5px 5px 15px rgba(100,100,100,0.3); margin:20px;">
      <div class="img">
        <img src="{{ url('/storage/'.$k->gambar) }}">
      </div>
      <div class="capt ml-5">
      <h3>{{ $k->kategori }}</h3>
      <p style="font-size:16px;">{{ $k->deskripsi }}</p>
      <a href="/kategori/{{ $k->id }}" class="mt-3"> Selengkapnya </a>
      </div>
  </div>
  </div>
  </div>
  @endforeach

   <div class="col-md-12 mt-5 text-center justify-content-center">
        {{ $kat->links() }}
        </div>

</div>

@endsection

@section('footer')
