@extends('lay.temp')
@section('title', 'Halaman Wisata')
@section('header')
@section('sidebar')

@section('content')

<div class="row flex-grow justify-content-center mt-5">
<div class="col-8">
<div class="card">
    <div class="card-body">
    <h4 class="card-title">Tambah Wisata</h4>
    <form class="forms-sample" method="post" action="/tambah_wisata" enctype="multipart/form-data"> 
    @csrf
        <div class="form-group">
        <label for="nama_wisata">Wisata</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="nama_wisata">
        </div>

        <div class="form-group">
        <label for="id_daerah">Daerah</label>
        <select class="form-control" name="id_daerah">
        @foreach($daerah as $d)
        <option value="{{ $d->id }}">{{ $d->nama }}</option>
        @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="id_kategori">Daerah</label>
        <select class="form-control" name="id_kategori">
        @foreach($kategori as $k)
        <option value="{{ $k->id }}">{{ $k->nama }}</option>
        @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="deskripsi">
        </div>
        <div class="form-group">
        <label for="lokasi">Lokasi</label>
        <input type="text" autofocus autocomplete="off" class="form-control" name="lokasi">
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

