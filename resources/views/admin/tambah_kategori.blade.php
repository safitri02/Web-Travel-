@extends('lay.temp')
@section('title', 'Halaman Wisata')
@section('header')
@section('sidebar')

@section('content')

<div class="row flex-grow justify-content-center mt-5">
<div class="col-8">
<div class="card">
    <div class="card-body">
    <h4 class="card-title">Tambah Kategori</h4>
    <form class="forms-sample" method="post" action="/tambah_kategori" enctype="multipart/form-data"> 
    @csrf
        <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="kategori">
        </div>
        <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea type="text" autofocus autocomplete="off" class="form-control" name="deskripsi"></textarea>
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

