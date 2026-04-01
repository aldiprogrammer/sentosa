<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bahan;
use App\Models\Jenisbahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    function index(){
        $title = 'Data Bahan';
        $bahan = Bahan::with('jenisbahan')->get();
        $jenis = Jenisbahan::all();
        return view('admin/bahan', compact('title', 'bahan', 'jenis'));
    }

    function store(Request $request){
        $bh = new Bahan();
        $bh->tgl_masuk = $request->tgl_masuk;
        $bh->nama_bahan = $request->nama_bahan;
        $bh->jumlah_bahan = $request->jml_bahan;
        $bh->id_kategori_bahan = $request->jenis_bahan;
        $bh->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');

    }

    function update(Request $request, $id){
        
        $bh = Bahan::find($id);
        $bh->tgl_masuk = $request->tgl_masuk;
        $bh->nama_bahan = $request->nama_bahan;
        $bh->jumlah_bahan = $request->jml_bahan;
         $bh->id_kategori_bahan = $request->jenis_bahan;
        $bh->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id){
        
        $bh = Bahan::find($id);
        $bh->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}