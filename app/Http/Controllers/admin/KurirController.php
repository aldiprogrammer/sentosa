<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    function index(){
        $title = 'Data Kurir';
        $kurir = Kurir::all();
        return view('admin/kurir', compact('title', 'kurir'));
    }

    function store(Request $request){
        
        $kr = new Kurir();
        $kr->nama = $request->nama;
        $kr->alamat = $request->alamat;
        $kr->nohp = $request->nohp;
        $kr->status = $request->status;
        $kr->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    function update(Request $request, $id){
         $kr = Kurir::find($id);
        $kr->nama = $request->nama;
        $kr->alamat = $request->alamat;
        $kr->nohp = $request->nohp;
        $kr->status = $request->status;
        $kr->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id){
        
        $kr = Kurir::find($id);
        $kr->delete();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }
}