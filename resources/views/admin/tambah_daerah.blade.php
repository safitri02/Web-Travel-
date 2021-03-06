@extends('lay.temp')
@section('title', 'Halaman Wisata')
@section('header')
@section('sidebar')

@section('content')

<div class="row flex-grow justify-content-center mt-5">
<div class="col-8">
<div class="card">
    <div class="card-body">
    <h4 class="card-title">Tambah Daerah</h4>
    <form class="forms-sample" method="post" action="/tambah_daerah" enctype="multipart/form-data"> 
    @csrf
        <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="nama">
        </div>
        <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="deskripsi">
        </div>
        <div class="form-group">
        <label for="gambar">Image</label>
        <input type="file" accept="image/*" autofocus autocomplete="off" class="form-control" name="gambar">
        </div>
       
        <button type="submit" class="btn btn-success float-right">Tambah</button>
        <button class="btn btn-dark mr-2 float-right">Cancel</button>
    </form>
    </div>
</div>
</div>
    
@endsection

@section('footer')

