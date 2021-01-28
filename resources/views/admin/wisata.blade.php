@extends('lay.temp')
@section('title', 'Halaman Wisata')
@section('header')
@section('sidebar')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Wisata</h6>
</div>
<div class="card-body">
<a href="/tambah_wisata" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Wisata</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                    <th>Daerah </th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
             <?php $no = 1; ?>

            @forelse($wisata as $w)
                <tbody>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $w->nama_wisata }}</td>
                    <td>{{ $w->deskripsi }}</td>
                    <td>{{ $w->lokasi }}</td>
                    <td>{{ $w->daerah->nama }}</td>
                    <td>{{ $w->kategori->kategori }}</td>
                    <td>
                    <img src="{{ url('/storage/'. $w->gambar) }}" style="max-width:30px;"> 
                    </td>
                    <td> 
                        <a href="/hapus_wisata/{{ $w->id }}" class="btn btn-danger btn-sm"> Hapus </a>
                    </td>
                </tr>
                </tbody>
                @empty
                <tr>
                    <td colspan="6" class="text-center"><p>Data Wisata Kosong</p></td>
                </tr>
            @endforelse
        </table>
        <div class="col-md-12 mt-5 text-center justify-content-center">
        {{ $wisata->links() }}
        </div>
    </div>
</div>
</div>

@endsection

@section('footer')

