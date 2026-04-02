<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index()
    {
        $title = 'Order';
        return view('admin/order', compact('title'));
    }
}
