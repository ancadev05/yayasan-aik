<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesDonasiController extends Controller
{
    public function masjid()
    {
        return view('pages.donasi.masjid');
    }
}
