<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Jasadesain;
use App\Models\Nomorantrian;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index()
    {
        $title = 'Order';
        $nomorantrian = Nomorantrian::orderBy('id', 'desc')->first();
        $kode = 'ORD-' . rand(0, 10000);
        $customer = Customer::all();
        $jasa = Jasadesain::all();
        $pegawai = Pegawai::where('jabatan', 'Desainer')->get();
        return view('admin/order', compact('title', 'nomorantrian', 'kode', 'customer', 'jasa', 'pegawai'));
    }
}
