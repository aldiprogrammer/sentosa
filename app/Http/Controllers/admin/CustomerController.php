<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {
        $title = 'Data Customer';
        $customer = Customer::all();
        return view('admin/customer', compact('title', 'customer'));
    }

    function store(Request $request)
    {
        $cs = new Customer();
        $cs->nama = $request->nama;
        $cs->jenis_kelamin = $request->jk;
        $cs->nohp = $request->nohp;
        $cs->alamat = $request->alamat;
        $cs->save();
        return redirect()->back()->with('success', 'Data berhasil ditambah');
    }

    function update(Request $request, $id)
    {

        $cs = Customer::find($id);
        $cs->nama = $request->nama;
        $cs->jenis_kelamin = $request->jk;
        $cs->nohp = $request->nohp;
         $cs->alamat = $request->alamat;
        $cs->update();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    function delete($id)
    {
        $cs = Customer::find($id);
        $cs->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}