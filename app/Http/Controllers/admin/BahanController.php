<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bahan;
use App\Models\Jenisbahan;
use App\Models\Satuanstok;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    function index()
    {
        $title = 'Data Bahan';
        $bahan = Bahan::with('jenisbahan', 'satuanstok')->get();
        $jenis = Jenisbahan::all();
        $satuan = Satuanstok::all();
        return view('admin/bahan', compact('title', 'bahan', 'jenis', 'satuan'));
    }

    function store(Request $request)
    {
        $bh = new Bahan();
        $bh->tgl_masuk = $request->tgl_masuk;
        $bh->nama_bahan = $request->nama_bahan;
        $bh->jumlah_bahan = $request->jml_bahan;
        $bh->id_kategori_bahan = $request->jenis_bahan;
        $bh->klik = $request->klik;
        $bh->mode_cetak = $request->mode_cetak;
        $bh->kode = $request->kode;
        $bh->kelompok = $request->kelompok;
        $bh->satuan_stok = $request->satuan_bahan;
        $bh->luas = $request->luas;
        $bh->qty = $request->qty;
        $bh->konversi = $request->konversi;

        $bh->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    function update(Request $request, $id)
    {

        $bh = Bahan::find($id);
        $bh->tgl_masuk = $request->tgl_masuk;
        $bh->nama_bahan = $request->nama_bahan;
        $bh->jumlah_bahan = $request->jml_bahan;
        $bh->id_kategori_bahan = $request->jenis_bahan;
        $bh->klik = $request->klik;
        $bh->mode_cetak = $request->mode_cetak;
        $bh->kode = $request->kode;
        $bh->kelompok = $request->kelompok;
        $bh->satuan_stok = $request->satuan_bahan;
        $bh->luas = $request->luas;
        $bh->qty = $request->qty;
        $bh->konversi = $request->konversi;
        $bh->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {

        $bh = Bahan::find($id);
        $bh->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
