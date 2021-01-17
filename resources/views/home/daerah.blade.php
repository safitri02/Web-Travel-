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
<div class="judul text-center mt-11 mb-5">
<h1 style="font-weight:700;">Wisata Daerah</h1>
<p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
</div>

@foreach ($daerah as $d)
    <div class="row">
    <div class="col-md-3">
    <div class="card" style="width: 18rem;">
    <img src="{{ url('/storage/'.$d->gambar) }}" class="card-img-top" alt="{{ $d->nama }}">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    </div>
    </div>
@endforeach




</div>
{{-- End Container --}}
@endsection

@section('footer')
