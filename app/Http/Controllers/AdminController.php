<?php

namespace App\Http\Controllers;
use App\User;
use App\Wisata;
use App\Hotel;
use App\Daerah;
Use Alert;
use App\Restoran;
use App\Tiket;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function wisata()
    {
        $wisata = Wisata::with('daerah')->get();
        return view('admin.wisata', compact('wisata'));
    }

    public function add_wisata()
    {
        $daerah = Daerah::all();
        return view('admin.add_wisata', compact('daerah'));
    }

    public function store(Request $req)
    {
        // return $req;
        $req->validate([
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'id_daerah' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required|image'
        ]);

        $wisata = new Wisata;
        $wisata->nama_wisata = $req->nama_wisata;
        $wisata->deskripsi = $req->deskripsi;
        $wisata->lokasi = $req->lokasi;
        $wisata->id_daerah = $req->id_daerah;
        $wisata->gambar = $req->file('gambar')->store('/gambar', 'public');
        $wisata->save();

        if($wisata){
            Alert::success('Selamat', 'Wisata baru telah ditambahkan');
            return redirect('/wisata');
        } else{
            Alert::error('Gagal', 'Wisata baru gagal ditambahkan');
            return redirect('/tambah_wisata');
        }

        
    }

    public function destory($id)
    {
        $hapus = Wisata::findOrFail($id);
        $hapus->delete();

        return redirect('/wisata');
    }

    public function restoran()
    {
        $restoran = Restoran::all();
        return view('admin.restoran', compact('restoran'));
    }

    public function tambah_restoran()
    {
        return view('admin.tambah_restoran');
    }

    public function restoran_store(Request $req)
    {
        // return $req;
        $req->validate([
            'nama_restoran' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|image'
        ]);

        $restoran = new restoran;
        $restoran->nama_restoran = $req->nama_restoran;
        $restoran->deskripsi = $req->deskripsi;
        $restoran->alamat = $req->alamat;
        $restoran->gambar = $req->file('gambar')->store('/gambar', 'public');
        $restoran->save();

        return redirect('/restoran');
    }

    public function restoran_destroy($id)
    {
        $hapus = Restoran::findOrFail($id);
        $hapus->delete();

        return redirect('/restoran');
    }

    public function hotel()
    {
        $hotel = Hotel::all();
        return view('admin.hotel', compact('hotel'));
    }

    public function tambah_hotel()
    {
        return view('admin.tambah_hotel');
    }

    public function hotel_store(Request $req)
    {
        // return $req;
        $req->validate([
            'nama_hotel' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|image'
        ]);
        
        // $hotel = Hotel::create($req->all());
        $hotel = new Hotel;
        $hotel->nama_hotel = $req->nama_hotel;
        $hotel->harga = $req->harga;
        $hotel->deskripsi = $req->deskripsi;
        $hotel->alamat = $req->alamat;
        $hotel->gambar = $req->file('gambar')->store('/gambar', 'public');
        $hotel->save();

        return redirect('/hotel');
    }

    public function hotel_destroy($id)
    {
       $hotel = Hotel::findOrFail($id);
       $hotel->delete();

       return redirect('/hotel');
    }

    public function daerah()
    {
        $daerah = Daerah::all();
        return view('admin.pulau', compact('daerah'));
    }

    public function tambah_daerah()
    {
        return view('admin.tambah_daerah');
    }

    public function daerah_store(Request $req)
    {
        // return $req;
        $req->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image'
        ]);

        $daerah = new Daerah;
        $daerah->nama = $req->nama;
        $daerah->deskripsi = $req->deskripsi;
        $daerah->gambar = $req->file('gambar')->store('/gambar', 'public');
        $daerah->save();

        return redirect('/daerah');
    }
}
