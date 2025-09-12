<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitUsahaController extends Controller
{
    public function pantiAsuhan()
    {
        return view('pages.unit-usaha.panti-asuhan');
    }

    public function pondokTahfidz()
    {
        return view('pages.unit-usaha.pondok-tahfidz');
    }
}
