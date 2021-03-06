<?php

namespace App\Http\Controllers;
use App\User;
use App\Wisata;
use App\Daerah;
use App\Hotel;
use App\Komentar;
use App\Restoran;
use App\Kategori;
use Alert;
use App\Tiket;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function wisata(Daerah $daerah)
    {
        $daerah = Daerah::all();
        return view('home.destinasi', compact('daerah'));
    }

    public function tentang()
    {
        return view('home.tentang');
    }

    public function per_daerah($id)
    {
        $daerah = DB::table('wisata')->where('id_daerah', $id)->paginate(8);
    //    return $daerah;
    Return view('home.wisata_daerah', compact('daerah'));
        
    }

    public function eksplorasi()
    {
        $wisata = Wisata::with('kategori')->paginate(12);
        return view('home.eksplorasi', compact('wisata'));
    }

    public function wisata_detail($id)
    {
        $eksplor = Wisata::find($id);

        $ulasan = DB::table('komentar')->where('id_wisata', $id)->get();

        return view('home.wisata_detail', compact('eksplor', 'ulasan'));
    }

    public function cari_wisata(Request $req)
    {
        // return $req;
        // $cari_wisata = Wisata::with('daerah')->whereHas('nama_wisata', function ($query) use ($cari){
        //     $query->where('nama_wisata', 'ilike', "%" .$cari. "%");
        // })->OrWhereLike('nama', $cari)->get();
        // return $cari_wisata;
        $cari = $req->cari;
        // return $cari;
        $wisata = DB::table('wisata')->where('nama_wisata', 'like', "%". $cari ."%")->paginate(12);
        return view('home.eksplorasi', compact('wisata'));
    }

    public function ulasan(Request $req, $id)
    {
        // $id_wisata = $id;
        // return $id_wisata;
        // die;

        //ambil id wisata
        $id_wisata = $id;

        $komen = new Komentar;
        $komen->id_wisata = $id_wisata;
        $komen->nama = $req->nama;
        $komen->komentar = $req->komentar;
        $komen->save();

        return back();
        
    }

    // public function hotelresto()
    // {
    //     $resto = Restoran::all();
    //     $hotel = Hotel::all();

    //     return view('home.hotel_resto', compact('hotel', 'resto'));
    // }

    // public function hotel_detail($id)
    // {
    //     // return $id;
    //     $hotel = Hotel::findOrFail($id)->first();
    //     return view('home.hotel_detail', compact('hotel'));
    // }

    public function kategori()
    {
        $kat = kategori::paginate(5);
        return view('home.kategori', compact('kat'));
    }

    public function berdasarKategori(Request $req, $id)
    {
        // $id = Kategori::find($id);
        // $katwis = DB::table('wisata')->where('id_kategori', $id)->paginate(9);
        $katwis = Wisata::with('kategori')->where('id_kategori', $id)->paginate(9);
        return view('home.kategori_detail', compact('katwis'));

        // $ulasan = DB::table('komentar')->where('id_wisata', $id)->get();
    }

    public function kontak()
    {
        return view('home.kontak');
    }
}