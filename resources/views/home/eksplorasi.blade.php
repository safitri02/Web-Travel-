@extends('lay.lay')
@section('title', 'Travelify')
@section('navbar')
@section('content')
{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid destinasi justify-content-center">
  <div class="container">
    <h2 class="text-center justify-content-center" style="font-weigh:700; color:white; margin-top:150px">Mau Kemana Kita Hari Ini?</h2>
  <div class="row">
  <div class="col-md-2">
  </div>
  </div>
  <div class="row">
  <div class="col-md-2"><p> <span></span></p></div>
  <div class="col-md-8">
  <div class="kotak mt-2">
    <form method="post" action="/cari_wisata">
    @csrf
      <div class="input-group mb-3">
        <input type="text" style="border:none;" class="form-control mt-1" name="cari" autocomplete="off" placeholder="Cari Wisata">
        <button class="button-mini" type="submit" >Cari</button>
      </div>
    </form>
  </div>
</div>
</div>

  </div>
</div>
{{-- End Jumbotron --}}


<div class="container mb-10">

{{-- Wisata --}}
<div class="judul2 text-center mt-5 mb-5">
<h1 style="font-weight:700;">Eksplorasi Wisata</h1>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>

<div class="row mt-5">
@forelse ($wisata as $eksplor)
    <div class="col-md-3">
    <div class="card" style=" border-radius:10px; border:none; box-shadow:5px 5px 15px rgba(100,100,100,0.3);">
    <img style="border-radius:10px;" src="{{ url('/storage/'.$eksplor->gambar) }}" class="careksplor-img-top" alt="{{ $eksplor->nama_wisata }}">
    <div class="card-body">
    <badge class="badge bg-success mb-2" style="color:white;"> Kategori </badge>
        <h5 class="card-title"><a style="color:black;" href="/wisata/{{ $eksplor->id }}/eksplor">{{ $eksplor->nama_wisata }}</a></h5>
        <p style="opacity:0.7;">{{ $eksplor->lokasi }}</p>
    </div>
    </div>
    </div>
    @empty
        <div class="judul text-center mt-10 mb-5">
        <h5 style="font-weight:700;">Maaf Wisata Tidak Ditemukan</h5>
        </div>
  
@endforelse
</div>

<div class="col-md-12 mt-5 text-center justify-content-center">
{{ $wisata->links() }}
</div>

</div>
{{-- End Container --}}
@endsection

@section('footer')
