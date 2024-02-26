<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
     public function index()
    {
        // Logika untuk halaman penjualan (Sales)
        return view('sales.index');
    }
}
