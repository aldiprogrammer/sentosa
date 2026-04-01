<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    function index(){
        $title = 'Data Pegawai';
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        return view('admin/pegawai', compact('title', 'pegawai', 'jabatan'));
    }

    function store(Request $request){
        $pg = new Pegawai();
        $pg->nama  = $request->nama;
        $pg->alamat = $request->alamat;
        $pg->nohp = $request->nohp;
        $pg->jabatan = $request->jabatan;
        $pg->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    function update(Request $request, $id){
        $pg = Pegawai::find($id);
        $pg->nama  = $request->nama;
        $pg->alamat = $request->alamat;
        $pg->nohp = $request->nohp;
        $pg->jabatan = $request->jabatan;
        $pg->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id){
         $pg = Pegawai::find($id);
          $pg->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}