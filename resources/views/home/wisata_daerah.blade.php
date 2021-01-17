@extends('lay.lay')
@section('title', 'Travelify')
@section('navbar')
@section('content')
{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid destinasi">
  <div class="container">
     <div class="judul text-center">
    <h1 style="font-weight:700;">Eksplorasi Wisata Daerah</h1>
    <p class="mt-3"><a href="/destinasi" style="color:white;">Kembali</a> > <a href="/" style="color:white;">Beranda</a></p>
    </div>
  </div>
</div>
{{-- End Jumbotron --}}
<div class="container mb-10">

<div class="row mt-5">
@forelse ($daerah as $e)
    <div class="col-md-3">
    <div class="card" style=" border-radius:10px; border:none; box-shadow:5px 5px 15px rgba(100,100,100,0.3);">
    <img style="border-radius:10px;" src="{{ url('/storage/'.$e->gambar) }}" class="care-img-top" alt="{{ $e->nama_wisata }}">
    <div class="card-body">
    {{-- <badge class="badge bg-success mb-2" style="color:white;"> Kategori </badge> --}}
        <h5 class="card-title"><a style="color:black;" href="/wisata/{{ $e->id }}/eksplor">{{ $e->nama_wisata }}</a></h5>
        <p style="opacity:0.7;">{{ $e->lokasi }}</p>
    </div>
    </div>
    </div>
    @empty
        <div class="judul text-center mt-10 mb-5">
        <h5 style="font-weight:700;">Maaf Wisata Tidak Ditemukan</h5>
        </div>
  
@endforelse
</div>

<div class="col-md-12 mt- text-center justify-content-center">
{{ $daerah->links() }}
</div>

</div>
{{-- End Container --}}
@endsection

@section('footer')

