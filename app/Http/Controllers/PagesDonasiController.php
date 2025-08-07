<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesDonasiController extends Controller
{
    public function gedungSantri()
    {
        return view('pages.donasi.gedung-santri');
    }
}
