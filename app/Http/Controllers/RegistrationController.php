<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function tampilkanFormRegistrasi()
    {
        return view('index');
    }

    public function prosesRegistrasi(Request $request)
    {
        // Handle proses registrasi di sini
    }
}
