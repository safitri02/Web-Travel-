@extends('lay.temp')
@section('title', 'Halaman Hotel')
@section('header')
@section('sidebar')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Hotel</h6>
</div>
<div class="card-body">
<a href="/tambah_hotel" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hotel</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Lokasi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
             <?php $no = 1; ?>

            @forelse($hotel as $h)
                <tbody>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $h->nama_hotel }}</td>
                    <td>{{ $h->harga }}</td>
                    <td>{{ $h->deskripsi }}</td>
                    <td>{{ $h->alamat }}</td>
                    <td>
                    <img src="{{ url('/storage/'.$h->gambar) }}" style="max-width:30px;"> 
                    </td>
                    <td> 
                        <a href="/hapus_hotel/{{ $h->id }}" class="btn btn-danger btn-sm"> Hapus </a>
                        <a href="/edit_hotel/{{ $h->id }}" class="btn btn-warning btn-sm"> Edit </a>
                    </td>
                </tr>
                </tbody>
                @empty
                <tr>
                    <td colspan="6" class="text-center"><p>Hotel Kosong</p></td>
                </tr>
            @endforelse
        </table>
    </div>
</div>
</div>

@endsection

@section('footer')

