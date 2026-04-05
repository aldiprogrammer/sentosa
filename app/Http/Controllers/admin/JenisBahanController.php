<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jenisbahan;
use Illuminate\Http\Request;

class JenisBahanController extends Controller
{
    function index(){

        $title = 'Data Jenis Bahan';
        $jenisbahan = Jenisbahan::all();
        return view('admin/jenisbahan', compact('title', 'jenisbahan'));

    }
 
    function store(Request $request){
        $js = new Jenisbahan();
        $js->jenis_bahan = $request->jenis_bahan;
        $js->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');

    }

    function update(Request $request, $id){
        $js = Jenisbahan::find($id);
        $js->jenis_bahan = $request->jenis_bahan;
        $js->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id){
         $js = Jenisbahan::find($id);
         $js->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
