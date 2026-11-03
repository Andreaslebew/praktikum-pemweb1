<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama_lengkap = "Andrean Satria Bagaskara";
        return view('home', compact('nama_lengkap'));
    }
}
