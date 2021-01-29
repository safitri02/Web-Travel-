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

<div class="row mt-5">
@forelse ($katwis as $k)
    <div class="col-md-3">
    <div class="card" style=" border-radius:10px; border:none; box-shadow:5px 5px 15px rgba(100,100,100,0.3);">
    <img style="border-radius:10px;" src="{{ url('/storage/'.$k->gambar) }}" class="card-img-top" alt="{{ $k->nama_wisata }}">
    <div class="card-body">
    <badge class="badge bg-success mb-2" style="color:white;"> {{ $k->kategori->kategori }} </badge>
        <h5 class="card-title"><a style="color:black;" href="/wisata/{{ $k->id }}/eksplor">{{ $k->nama_wisata }}</a></h5>
        <p style="opacity:0.7;">{{ $k->lokasi }}</p>
    </div>
    </div>
    </div>
    @empty
        <div class="judul text-center mt-10 mb-5">
        <h5 style="font-weight:700;">Maaf Kategori tersebut belom ada wisata</h5>
        </div>
  
@endforelse
</div>

<div class="col-md-12 mt-5 text-center justify-content-center">
{{ $katwis->links() }}
</div>

</div>
{{-- End Container --}}
@endsection


@endsection

@section('footer')
