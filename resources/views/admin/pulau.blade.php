@extends('lay.temp')
@section('title', 'daerah Wisata')
@section('header')
@section('sidebar')

@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daerah Wisata</h6>
</div>
<div class="card-body">
<a href="/tambah_daerah" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Daerah</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
             <?php $no = 1; ?>

            @forelse($daerah as $d)
                <tbody>
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->deskripsi }}</td>
                    <td>
                    <img src="{{ url('/storage/'. $d->gambar) }}" style="max-width:30px;"> 
                    </td>
                    <td> 
                        <a href="/hapus_daerah/{{ $d->id }}" class="btn btn-danger btn-sm"> Hapus </a>
                        <a href="/edit_wisata/{{ $d->id }}" class="btn btn-warning btn-sm"> Edit </a>
                    </td>
                </tr>
                </tbody>
                @empty
                <tr>
                    <td colspan="6" class="text-center"><p>Daftar Daerah Kosong</p></td>
                </tr>
            @endforelse
        </table>
    </div>
</div>
</div>

@endsection

@section('footer')

