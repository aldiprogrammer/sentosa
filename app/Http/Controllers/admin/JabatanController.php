<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    function index(){
        $title = 'Data Jabatan';
        $jabatan = Jabatan::all();
        return view('admin/jabatan', compact('title', 'jabatan'));
    }

    function store(Request $request){
        $jb = new Jabatan();
        $jb->jabatan = $request->jabatan;
        $jb->save();
        return redirect()->back()->with('success', 'Data Barhasil ditambah');
    }

    function update(Request $request, $id){
        
       
        $jb = Jabatan::find($id);
        $jb->jabatan = $request->jabatan;
        $jb->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id){
        $jb = Jabatan::find($id);
        $jb->delete();
        return redirect()->back()->with('success', 'Data berhasil dihpaus');
    }
}