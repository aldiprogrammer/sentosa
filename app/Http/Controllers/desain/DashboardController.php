<?php

namespace App\Http\Controllers\desain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('desain.index');
    }
}
