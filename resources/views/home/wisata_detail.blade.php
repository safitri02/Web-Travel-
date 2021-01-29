@extends('lay.lay')
@section('title', 'Travelify')
@section('navbar')
@section('content')
{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid destinasi">
  <div class="container">
      <div class="judul text-center mt-10">
        <h1 style="font-weight:700;">Exlplore {{ $eksplor->nama_wisata }}</h1>
         <p class="mt-3"><a href="/" style="color:white;">Beranda</a> > <a href="/eksplorasi" style="color:white;">Eksplorasi</a></p>
      </div>
  </div>
</div>
{{-- End Jumbotron --}}

<div class="container mb-10">

{{-- Wisata --}}
{{-- <div class="judul text-center mt-10">
<h1 style="font-weight:700;">Exlplore {{ $eksplor->nama_wisata }}</h1>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div> --}}

  <div class="row justify-content-center">
  <div class="col-md-12">
  <div class="detail_wisata">
      <div class="img">
        <img src="{{ url('/storage/'.$eksplor->gambar) }}" style="width:450px; border-radius:10px;">
      </div>
      <div class="capt ml-5">
      <h3>{{ $eksplor->nama_wisata }}</h3>
      <p style="font-size:16px;" class="mt-4">{{ $eksplor->deskripsi }}</p>
      <p style="font-size:16px; opacity:0.7;">Lokasi : {{ $eksplor->lokasi }}</p>
      </div>
  </div>
  </div>
  </div>
{{-- End row wisata--}}

<h2 class="mt-5 text-center" style="font-weight:700;">Semua Ulasan</h2>
<div class="row mt-4">
<div class="col-md-6">
   <form action="/ulasan/{{ $eksplor->id }}" method="post">
   @csrf
   {{-- <div class="input-group mb-3">
      <input type="hidden" class="form-control" name="id_wisata">
  </div> --}}
   <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Masukan Nama" autocomplete="off" name="nama">
    </div>
    <div class="input-group">
      <textarea class="form-control" name="komentar" autocomplete="off" aria-label="With textarea" placeholder="Tulis Ulasan"></textarea>
    </div>
     <button class="button-mini btn-block mt-3">Ulas Sekarang</button>
   </form>
</div>
<div class="col-md-6 ulasan">
    {{-- <div class="ulasan"> --}}
  @forelse ($ulasan as $ulas)
      <p style="opacity:0.7;">Dari : {{ $ulas->nama }}</p>
      <h5 style="margin-top:-15px; opacity:0.9;">{{ $ulas->komentar }}</h5 style="margin-top:-10px;">
      <hr>
  @empty
      <h5 class="text-center">Belom Ada Ulasan</h5>
  @endforelse
    {{-- </div> --}}
</div>
</div>
</div>
</div>
{{-- End Container --}}
@endsection

@section('footer')
