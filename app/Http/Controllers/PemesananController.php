<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class PemesananController extends Controller
{
    public function index()
    {
        $menu = Kategori::all();
        return view('pesan', compact('menu'));
    }
    public function sukses()
    {
        return view('sukses');
    }
}
