<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat datang!";
    }

    public function about()
    {
        return "Nama: Pascalis Dewangga Sandi Laksono - NIM:2241720140";
    }
    public function articles($id)
    {
        return "Halaman artikel dengan ID " . $id;
    }
}

