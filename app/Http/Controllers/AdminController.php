<?php

namespace App\Http\Controllers;
use App\User;
use App\Wisata;
use App\Hotel;
use App\Daerah;
Use Alert;
use App\Restoran;
use App\Tiket;
use App\Kategori;
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
        $wisata = Wisata::with('daerah', 'kategori')->paginate(5);
        return view('admin.wisata', compact('wisata'));
    }

    public function add_wisata()
    {
        $kategori = Kategori::all();
        $daerah = Daerah::all();
        return view('admin.add_wisata', compact('daerah', 'kategori'));
    }

    public function store(Request $req)
    {
        // return $req;
        $req->validate([
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'id_daerah' => 'required',
            'id_kategori' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required|image'
        ]);

        $wisata = new Wisata;
        $wisata->nama_wisata = $req->nama_wisata;
        $wisata->deskripsi = $req->deskripsi;
        $wisata->lokasi = $req->lokasi;
        $wisata->id_daerah = $req->id_daerah;
        $wisata->id_kategori = $req->id_kategori;
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

    public function edit($id)
    {
        $edit = Wisata::find($id);
        $kategori = Kategori::all();
        $daerah = Daerah::all();
        Return view('admin.edit_wisata', compact('kategori', 'daerah', 'edit'));
    }

    public function update(Request $req, $id)
    {
        $edit = Wisata::find($id);
        return $edit;
    }    

    public function destory($id)
    {
        $hapus = Wisata::findOrFail($id);
        $hapus->delete();

        if($hapus){
            Alert::success('Selamat', 'Wisata Berhasil dihapus');
            return redirect('/wisata');
        } else{
            Alert::error('Gagal', 'Wisata gagal dihapus');
            return redirect('/wisata');
        }
        
    }

    public function kategori()
    {
        $kategori = Kategori::paginate(8);
        return view('admin.kategori', compact('kategori'));
    }

    public function tambah_kategori()
    {
       return view('admin.tambah_kategori');
    }

    public function store_kategori(Request $req)
    {
        // return $req;
        $req->validate([
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image'
        ]);

        $kat = new kategori;
        $kat->kategori = $req->kategori;
        $kat->deskripsi = $req->deskripsi;
        $kat->gambar = $req->file('gambar')->store('/gambar', 'public');
        $kat->save();

        if($kat){
            Alert::success('Berhasil', 'Data kategori berhasil ditambah');
            return redirect('/kategoriWisata');
        } else{
            Alert::error('Gagal', 'Data kategori gagal ditambah');
            return redirect('/tambah_kategori');
        }
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

        if($daerah){
            Alert::success('Berhasil', 'Data daerah berhasil ditambah');
            return redirect('/daerah');
        } else{
            Alert::error('Gagal', 'Data daerah gagal ditambah');
            return redirect('/tambah_daerah');
        }
        
    }
}
