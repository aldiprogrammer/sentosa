<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jasadesain;
use Illuminate\Http\Request;

class JasaDesainController extends Controller
{
 function index(){
    $title = "Data Jasa Desain";
    $jasa =  Jasadesain::all();
    return view('admin/jasadesain',compact('title', 'jasa'));
 }
    function store(Request $request){
        $js = new Jasadesain();
        $js->nama_jasa = $request->jasa;
        $js->harga = $request->harga;
        $js->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    function update(Request $request, $id){
        $js = Jasadesain::find($id);
         $js->nama_jasa = $request->jasa;
        $js->harga = $request->harga;
        $js->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id){
        $js = Jasadesain::find($id);
        $js->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}