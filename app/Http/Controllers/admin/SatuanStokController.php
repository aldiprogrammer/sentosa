<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Satuanstok;
use Illuminate\Http\Request;

class SatuanStokController extends Controller
{
    function index()
    {
        $title = ' Data Satuan Stok';
        $satuan = Satuanstok::all();
        return view('admin/satuanstok', compact('title', 'satuan'));
    }

    function store(Request $request)
    {
        $st = new Satuanstok();
        $st->nama_satuan = $request->nama_satuan;
        $st->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    function update(Request $request, $id)
    {
        $st = Satuanstok::find($id);
        $st->nama_satuan = $request->nama_satuan;
        $st->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $st = Satuanstok::find($id);
        $st->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
