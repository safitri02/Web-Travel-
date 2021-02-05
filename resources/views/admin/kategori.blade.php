@extends('lay.temp')
@section('title', 'Kategori Wisata')
@section('header')
@section('sidebar')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Kategori Wisata</h6>
</div>
<div class="card-body">
<a href="/tambah_kategori" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
             <?php $no = 1; ?>

            @forelse($kategori as $k)
                <tbody>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->kategori }}</td>
                    <td>{{ $k->deskripsi }}</td>
                    <td>
                    <img src="{{ url('/storage/'. $k->gambar) }}" style="max-width:30px;"> 
                    </td>
                    <td> 
                        <a href="/hapus_kategori/{{ $k->id }}" class="btn btn-danger btn-sm"> Hapus </a>
                    </td>
                </tr>
                </tbody>
                @empty
                <tr>
                    <td colspan="6" class="text-center"><p>Daftar Kategori Kosong</p></td>
                </tr>
            @endforelse
        </table>
         <div class="col-md-12 mt-5 text-center justify-content-center">
        {{ $kategori->links() }}
        </div>
    </div>
</div>
</div>

@endsection

@section('footer')

